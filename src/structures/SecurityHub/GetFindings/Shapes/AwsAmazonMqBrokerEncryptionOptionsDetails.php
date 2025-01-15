<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 * @property bool|null $UseAwsOwnedKey
 */
class AwsAmazonMqBrokerEncryptionOptionsDetails extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     UseAwsOwnedKey?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
