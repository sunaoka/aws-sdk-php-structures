<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateMarketplaceModelEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $initialInstanceCount
 * @property string $instanceType
 * @property string $executionRole
 * @property string|null $kmsEncryptionKey
 * @property VpcConfig|null $vpc
 */
class SageMakerEndpoint extends Shape
{
    /**
     * @param array{
     *     initialInstanceCount: int<1, max>,
     *     instanceType: string,
     *     executionRole: string,
     *     kmsEncryptionKey?: string|null,
     *     vpc?: VpcConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
