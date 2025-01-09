<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceComponentName
 * @property string $EndpointName
 * @property string $VariantName
 * @property Shapes\InferenceComponentSpecification $Specification
 * @property Shapes\InferenceComponentRuntimeConfig $RuntimeConfig
 * @property list<Shapes\Tag> $Tags
 */
class CreateInferenceComponentRequest extends Request
{
    /**
     * @param array{
     *     InferenceComponentName: string,
     *     EndpointName: string,
     *     VariantName?: string,
     *     Specification: Shapes\InferenceComponentSpecification,
     *     RuntimeConfig?: Shapes\InferenceComponentRuntimeConfig,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
