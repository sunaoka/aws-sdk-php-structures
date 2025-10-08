<?php

namespace Sunaoka\Aws\Structures\Sns\SetSMSAttributes;

trait SetSMSAttributesTrait
{
    /**
     * @param SetSMSAttributesRequest $args
     * @return SetSMSAttributesResponse
     */
    public function setSMSAttributes(SetSMSAttributesRequest $args)
    {
        $result = parent::setSMSAttributes($args->toArray());
        return new SetSMSAttributesResponse($result->toArray());
    }
}
