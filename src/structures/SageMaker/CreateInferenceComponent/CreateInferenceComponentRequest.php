<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceComponentName
 * @property string $EndpointName
 * @property string|null $VariantName
 * @property Shapes\InferenceComponentSpecification $Specification
 * @property Shapes\InferenceComponentRuntimeConfig|null $RuntimeConfig
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateInferenceComponentRequest extends Request
{
    /**
     * @param array{
     *     InferenceComponentName: string,
     *     EndpointName: string,
     *     VariantName?: string|null,
     *     Specification: Shapes\InferenceComponentSpecification,
     *     RuntimeConfig?: Shapes\InferenceComponentRuntimeConfig|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
