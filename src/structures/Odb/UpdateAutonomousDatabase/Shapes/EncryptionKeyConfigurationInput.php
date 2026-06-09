<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEncryptionKeyConfigurationInput|null $awsEncryptionKey
 */
class EncryptionKeyConfigurationInput extends Shape
{
    /**
     * @param array{awsEncryptionKey?: AwsEncryptionKeyConfigurationInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
