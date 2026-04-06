<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2Metadata|null $ec2
 * @property EcrContainerImageMetadata|null $ecrImage
 * @property EcrRepositoryMetadata|null $ecrRepository
 * @property LambdaFunctionMetadata|null $lambdaFunction
 */
class ResourceScanMetadata extends Shape
{
    /**
     * @param array{
     *     ec2?: Ec2Metadata|null,
     *     ecrImage?: EcrContainerImageMetadata|null,
     *     ecrRepository?: EcrRepositoryMetadata|null,
     *     lambdaFunction?: LambdaFunctionMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
