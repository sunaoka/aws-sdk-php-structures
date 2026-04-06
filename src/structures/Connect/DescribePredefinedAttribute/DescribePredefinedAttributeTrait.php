<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePredefinedAttribute;

trait DescribePredefinedAttributeTrait
{
    /**
     * @param DescribePredefinedAttributeRequest $args
     * @return DescribePredefinedAttributeResponse
     */
    public function describePredefinedAttribute(DescribePredefinedAttributeRequest $args)
    {
        $result = parent::describePredefinedAttribute($args->toArray());
        return new DescribePredefinedAttributeResponse($result->toArray());
    }
}
