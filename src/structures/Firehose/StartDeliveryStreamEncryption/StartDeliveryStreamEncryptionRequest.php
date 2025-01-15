<?php

namespace Sunaoka\Aws\Structures\Firehose\StartDeliveryStreamEncryption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property Shapes\DeliveryStreamEncryptionConfigurationInput|null $DeliveryStreamEncryptionConfigurationInput
 */
class StartDeliveryStreamEncryptionRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     DeliveryStreamEncryptionConfigurationInput?: Shapes\DeliveryStreamEncryptionConfigurationInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
