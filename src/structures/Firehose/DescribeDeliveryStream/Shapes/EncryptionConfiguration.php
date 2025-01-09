<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NoEncryption' $NoEncryptionConfig
 * @property KMSEncryptionConfig $KMSEncryptionConfig
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     NoEncryptionConfig?: 'NoEncryption',
     *     KMSEncryptionConfig?: KMSEncryptionConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
