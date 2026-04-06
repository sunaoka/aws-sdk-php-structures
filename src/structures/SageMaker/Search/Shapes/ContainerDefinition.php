<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerHostname
 * @property string|null $Image
 * @property ImageConfig|null $ImageConfig
 * @property 'SingleModel'|'MultiModel'|null $Mode
 * @property string|null $ModelDataUrl
 * @property array<string, string>|null $Environment
 * @property string|null $ModelPackageName
 * @property string|null $InferenceSpecificationName
 * @property MultiModelConfig|null $MultiModelConfig
 * @property ModelDataSource|null $ModelDataSource
 */
class ContainerDefinition extends Shape
{
    /**
     * @param array{
     *     ContainerHostname?: string|null,
     *     Image?: string|null,
     *     ImageConfig?: ImageConfig|null,
     *     Mode?: 'SingleModel'|'MultiModel'|null,
     *     ModelDataUrl?: string|null,
     *     Environment?: array<string, string>|null,
     *     ModelPackageName?: string|null,
     *     InferenceSpecificationName?: string|null,
     *     MultiModelConfig?: MultiModelConfig|null,
     *     ModelDataSource?: ModelDataSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
