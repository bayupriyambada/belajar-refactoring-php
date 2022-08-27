<?php

class refactor_conditional
{
  function isDiscountCoupon($discountCoupunt, $coupun)
  {
    // refactoring 1
    $discount = $discountCoupunt ? 95 : 98;
    return $coupun * $discount;

    // refactoring 2
    return $discountCoupunt ? $discount * 95 : $discount * 98;
  }

  function isDisibilyAmount()
  {
    return $this->isNotEligibleForDisability ?: 0;
  }

  function fragmentDuplicated($isSpesialDeal, $price)
  {
    $this->isDiscountCoupon($isSpesialDeal, $price);
    send();
  }

  function isNullConditioon($customer)
  {
    return $customer === null ? BillingPlan::basic : $customer->getPlan();
    // if ($customer === null) {
    //   $plan = BillingPlan::basic();
    // } else {
    //   $plan = $customer->getPlan();
    // }
  }
}
