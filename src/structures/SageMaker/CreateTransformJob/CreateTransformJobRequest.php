<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTransformJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformJobName
 * @property string $ModelName
 * @property int<0, max>|null $MaxConcurrentTransforms
 * @property Shapes\ModelClientConfig|null $ModelClientConfig
 * @property int<0, max>|null $MaxPayloadInMB
 * @property 'MultiRecord'|'SingleRecord'|null $BatchStrategy
 * @property array<string, string>|null $Environment
 * @property Shapes\TransformInput $TransformInput
 * @property Shapes\TransformOutput $TransformOutput
 * @property Shapes\BatchDataCaptureConfig|null $DataCaptureConfig
 * @property Shapes\TransformResources $TransformResources
 * @property Shapes\DataProcessing|null $DataProcessing
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ExperimentConfig|null $ExperimentConfig
 */
class CreateTransformJobRequest extends Request
{
    /**
     * @param array{
     *     TransformJobName: string,
     *     ModelName: string,
     *     MaxConcurrentTransforms?: int<0, max>|null,
     *     ModelClientConfig?: Shapes\ModelClientConfig|null,
     *     MaxPayloadInMB?: int<0, max>|null,
     *     BatchStrategy?: 'MultiRecord'|'SingleRecord'|null,
     *     Environment?: array<string, string>|null,
     *     TransformInput: Shapes\TransformInput,
     *     TransformOutput: Shapes\TransformOutput,
     *     DataCaptureConfig?: Shapes\BatchDataCaptureConfig|null,
     *     TransformResources: Shapes\TransformResources,
     *     DataProcessing?: Shapes\DataProcessing|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ExperimentConfig?: Shapes\ExperimentConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
