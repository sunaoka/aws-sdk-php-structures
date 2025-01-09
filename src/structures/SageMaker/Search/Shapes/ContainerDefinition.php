<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerHostname
 * @property string $Image
 * @property ImageConfig $ImageConfig
 * @property 'SingleModel'|'MultiModel' $Mode
 * @property string $ModelDataUrl
 * @property ModelDataSource $ModelDataSource
 * @property list<AdditionalModelDataSource> $AdditionalModelDataSources
 * @property array<string, string> $Environment
 * @property string $ModelPackageName
 * @property string $InferenceSpecificationName
 * @property MultiModelConfig $MultiModelConfig
 */
class ContainerDefinition extends Shape
{
    /**
     * @param array{
     *     ContainerHostname?: string,
     *     Image?: string,
     *     ImageConfig?: ImageConfig,
     *     Mode?: 'SingleModel'|'MultiModel',
     *     ModelDataUrl?: string,
     *     ModelDataSource?: ModelDataSource,
     *     AdditionalModelDataSources?: list<AdditionalModelDataSource>,
     *     Environment?: array<string, string>,
     *     ModelPackageName?: string,
     *     InferenceSpecificationName?: string,
     *     MultiModelConfig?: MultiModelConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
