<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2Metadata $ec2
 * @property EcrContainerImageMetadata $ecrImage
 * @property EcrRepositoryMetadata $ecrRepository
 * @property LambdaFunctionMetadata $lambdaFunction
 */
class ResourceScanMetadata extends Shape
{
    /**
     * @param array{
     *     ec2?: Ec2Metadata,
     *     ecrImage?: EcrContainerImageMetadata,
     *     ecrRepository?: EcrRepositoryMetadata,
     *     lambdaFunction?: LambdaFunctionMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
