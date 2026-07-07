<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EcrRepositoryMetadata|null $ecrRepository
 * @property EcrContainerImageMetadata|null $ecrImage
 * @property Ec2Metadata|null $ec2
 * @property LambdaFunctionMetadata|null $lambdaFunction
 * @property CodeRepositoryMetadata|null $codeRepository
 * @property VmInstanceMetadata|null $vmInstance
 * @property ContainerImageMetadata|null $containerImage
 * @property ContainerRepositoryMetadata|null $containerRepository
 * @property ContainerRegistryMetadata|null $containerRegistry
 * @property ServerlessFunctionMetadata|null $serverlessFunction
 */
class ResourceScanMetadata extends Shape
{
    /**
     * @param array{
     *     ecrRepository?: EcrRepositoryMetadata|null,
     *     ecrImage?: EcrContainerImageMetadata|null,
     *     ec2?: Ec2Metadata|null,
     *     lambdaFunction?: LambdaFunctionMetadata|null,
     *     codeRepository?: CodeRepositoryMetadata|null,
     *     vmInstance?: VmInstanceMetadata|null,
     *     containerImage?: ContainerImageMetadata|null,
     *     containerRepository?: ContainerRepositoryMetadata|null,
     *     containerRegistry?: ContainerRegistryMetadata|null,
     *     serverlessFunction?: ServerlessFunctionMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
