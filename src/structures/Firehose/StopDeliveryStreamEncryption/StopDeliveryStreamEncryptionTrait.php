<?php

namespace Sunaoka\Aws\Structures\Firehose\StopDeliveryStreamEncryption;

trait StopDeliveryStreamEncryptionTrait
{
    /**
     * @param StopDeliveryStreamEncryptionRequest $args
     * @return StopDeliveryStreamEncryptionResponse
     */
    public function stopDeliveryStreamEncryption(StopDeliveryStreamEncryptionRequest $args)
    {
        $result = parent::stopDeliveryStreamEncryption($args->toArray());
        return new StopDeliveryStreamEncryptionResponse($result->toArray());
    }
}
