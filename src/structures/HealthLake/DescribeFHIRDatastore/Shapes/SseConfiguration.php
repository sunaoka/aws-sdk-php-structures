<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KmsEncryptionConfig $KmsEncryptionConfig
 */
class SseConfiguration extends Shape
{
    /**
     * @param array{KmsEncryptionConfig: KmsEncryptionConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
