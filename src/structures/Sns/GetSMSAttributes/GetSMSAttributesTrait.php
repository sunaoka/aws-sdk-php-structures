<?php

namespace Sunaoka\Aws\Structures\Sns\GetSMSAttributes;

trait GetSMSAttributesTrait
{
    /**
     * @param GetSMSAttributesRequest $args
     * @return GetSMSAttributesResponse
     */
    public function getSMSAttributes(GetSMSAttributesRequest $args)
    {
        $result = parent::getSMSAttributes($args->toArray());
        return new GetSMSAttributesResponse($result->toArray());
    }
}
