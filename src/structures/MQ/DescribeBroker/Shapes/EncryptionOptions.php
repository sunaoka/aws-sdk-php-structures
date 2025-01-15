<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 * @property bool $UseAwsOwnedKey
 */
class EncryptionOptions extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     UseAwsOwnedKey: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
