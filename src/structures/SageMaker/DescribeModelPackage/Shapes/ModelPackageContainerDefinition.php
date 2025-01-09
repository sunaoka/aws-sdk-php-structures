<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerHostname
 * @property string $Image
 * @property string $ImageDigest
 * @property string $ModelDataUrl
 * @property ModelDataSource $ModelDataSource
 * @property string $ProductId
 * @property array<string, string> $Environment
 * @property ModelInput $ModelInput
 * @property string $Framework
 * @property string $FrameworkVersion
 * @property string $NearestModelName
 * @property AdditionalS3DataSource $AdditionalS3DataSource
 * @property string $ModelDataETag
 */
class ModelPackageContainerDefinition extends Shape
{
    /**
     * @param array{
     *     ContainerHostname?: string,
     *     Image: string,
     *     ImageDigest?: string,
     *     ModelDataUrl?: string,
     *     ModelDataSource?: ModelDataSource,
     *     ProductId?: string,
     *     Environment?: array<string, string>,
     *     ModelInput?: ModelInput,
     *     Framework?: string,
     *     FrameworkVersion?: string,
     *     NearestModelName?: string,
     *     AdditionalS3DataSource?: AdditionalS3DataSource,
     *     ModelDataETag?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
