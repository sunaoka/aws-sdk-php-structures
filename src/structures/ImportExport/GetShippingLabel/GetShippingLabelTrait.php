<?php

namespace Sunaoka\Aws\Structures\ImportExport\GetShippingLabel;

trait GetShippingLabelTrait
{
    /**
     * @param GetShippingLabelRequest $args
     * @return GetShippingLabelResponse
     */
    public function getShippingLabel(GetShippingLabelRequest $args)
    {
        $result = parent::getShippingLabel($args->toArray());
        return new GetShippingLabelResponse($result->toArray());
    }
}
