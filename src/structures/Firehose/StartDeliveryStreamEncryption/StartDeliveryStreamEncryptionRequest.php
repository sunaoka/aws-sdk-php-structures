<?php

namespace Sunaoka\Aws\Structures\Firehose\StartDeliveryStreamEncryption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property Shapes\DeliveryStreamEncryptionConfigurationInput $DeliveryStreamEncryptionConfigurationInput
 */
class StartDeliveryStreamEncryptionRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     DeliveryStreamEncryptionConfigurationInput?: Shapes\DeliveryStreamEncryptionConfigurationInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
