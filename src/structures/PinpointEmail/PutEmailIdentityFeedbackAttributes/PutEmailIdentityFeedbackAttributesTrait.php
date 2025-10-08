<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutEmailIdentityFeedbackAttributes;

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
