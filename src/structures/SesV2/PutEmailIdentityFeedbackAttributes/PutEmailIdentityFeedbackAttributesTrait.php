<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityFeedbackAttributes;

trait PutEmailIdentityFeedbackAttributesTrait
{
    /**
     * @param PutEmailIdentityFeedbackAttributesRequest $args
     * @return PutEmailIdentityFeedbackAttributesResponse
     */
    public function putEmailIdentityFeedbackAttributes(PutEmailIdentityFeedbackAttributesRequest $args)
    {
        $result = parent::putEmailIdentityFeedbackAttributes($args->toArray());
        return new PutEmailIdentityFeedbackAttributesResponse($result->toArray());
    }
}
