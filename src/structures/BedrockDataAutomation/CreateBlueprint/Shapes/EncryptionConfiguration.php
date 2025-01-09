<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateBlueprint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyId
 * @property array<string, string> $kmsEncryptionContext
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId: string,
     *     kmsEncryptionContext?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
