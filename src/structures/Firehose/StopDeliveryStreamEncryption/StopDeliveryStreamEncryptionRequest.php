<?php

namespace Sunaoka\Aws\Structures\Firehose\StopDeliveryStreamEncryption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 */
class StopDeliveryStreamEncryptionRequest extends Request
{
    /**
     * @param array{DeliveryStreamName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
