<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 * @property bool $UseAwsOwnedKey
 */
class AwsAmazonMqBrokerEncryptionOptionsDetails extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string,
     *     UseAwsOwnedKey?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
