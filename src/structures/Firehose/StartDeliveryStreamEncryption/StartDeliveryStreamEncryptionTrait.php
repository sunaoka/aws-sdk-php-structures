<?php

namespace Sunaoka\Aws\Structures\Firehose\StartDeliveryStreamEncryption;

trait StartDeliveryStreamEncryptionTrait
{
    /**
     * @param StartDeliveryStreamEncryptionRequest $args
     * @return StartDeliveryStreamEncryptionResponse
     */
    public function startDeliveryStreamEncryption(StartDeliveryStreamEncryptionRequest $args)
    {
        $result = parent::startDeliveryStreamEncryption($args->toArray());
        return new StartDeliveryStreamEncryptionResponse($result->toArray());
    }
}
