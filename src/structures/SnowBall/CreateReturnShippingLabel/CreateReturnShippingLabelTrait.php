<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateReturnShippingLabel;

trait CreateReturnShippingLabelTrait
{
    /**
     * @param CreateReturnShippingLabelRequest $args
     * @return CreateReturnShippingLabelResponse
     */
    public function createReturnShippingLabel(CreateReturnShippingLabelRequest $args)
    {
        $result = parent::createReturnShippingLabel($args->toArray());
        return new CreateReturnShippingLabelResponse($result->toArray());
    }
}
