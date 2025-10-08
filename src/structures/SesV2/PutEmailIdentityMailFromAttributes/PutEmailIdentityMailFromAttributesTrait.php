<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityMailFromAttributes;

trait PutEmailIdentityMailFromAttributesTrait
{
    /**
     * @param PutEmailIdentityMailFromAttributesRequest $args
     * @return PutEmailIdentityMailFromAttributesResponse
     */
    public function putEmailIdentityMailFromAttributes(PutEmailIdentityMailFromAttributesRequest $args)
    {
        $result = parent::putEmailIdentityMailFromAttributes($args->toArray());
        return new PutEmailIdentityMailFromAttributesResponse($result->toArray());
    }
}
