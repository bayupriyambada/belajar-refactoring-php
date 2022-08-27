<?php

class refactor_conditional
{
  public function isDiscountCoupon($discountCoupunt, $coupun)
  {
    // refactoring 1
    $discount = $discountCoupunt ? 95 : 98;
    return $coupun * $discount;

    // refactoring 2
    return $discountCoupunt ? $discount * 95 : $discount * 98;
  }

  public function isDisibilyAmount()
  {
    return $this->isNotEligibleForDisability ?: 0;
  }

  public function fragmentDuplicated($isSpesialDeal, $price)
  {
    $this->isDiscountCoupon($isSpesialDeal, $price);
    send();
  }

  public function isNullConditioon($customer)
  {
    return $customer === null ? BillingPlan::basic : $customer->getPlan();
  }

  public function withDraw($money)
  {
    // default 
    return  $money > $this->balance ? -1 : $this->balance -= $money;
  }
}
