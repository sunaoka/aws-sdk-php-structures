<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateMarketplaceModelEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $initialInstanceCount
 * @property string $instanceType
 * @property string $executionRole
 * @property string $kmsEncryptionKey
 * @property VpcConfig $vpc
 */
class SageMakerEndpoint extends Shape
{
    /**
     * @param array{
     *     initialInstanceCount: int<1, max>,
     *     instanceType: string,
     *     executionRole: string,
     *     kmsEncryptionKey?: string,
     *     vpc?: VpcConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
