<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTransformJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformJobName
 * @property string $ModelName
 * @property int<0, max> $MaxConcurrentTransforms
 * @property Shapes\ModelClientConfig $ModelClientConfig
 * @property int<0, max> $MaxPayloadInMB
 * @property 'MultiRecord'|'SingleRecord' $BatchStrategy
 * @property array<string, string> $Environment
 * @property Shapes\TransformInput $TransformInput
 * @property Shapes\TransformOutput $TransformOutput
 * @property Shapes\BatchDataCaptureConfig $DataCaptureConfig
 * @property Shapes\TransformResources $TransformResources
 * @property Shapes\DataProcessing $DataProcessing
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\ExperimentConfig $ExperimentConfig
 */
class CreateTransformJobRequest extends Request
{
    /**
     * @param array{
     *     TransformJobName: string,
     *     ModelName: string,
     *     MaxConcurrentTransforms?: int<0, max>,
     *     ModelClientConfig?: Shapes\ModelClientConfig,
     *     MaxPayloadInMB?: int<0, max>,
     *     BatchStrategy?: 'MultiRecord'|'SingleRecord',
     *     Environment?: array<string, string>,
     *     TransformInput: Shapes\TransformInput,
     *     TransformOutput: Shapes\TransformOutput,
     *     DataCaptureConfig?: Shapes\BatchDataCaptureConfig,
     *     TransformResources: Shapes\TransformResources,
     *     DataProcessing?: Shapes\DataProcessing,
     *     Tags?: list<Shapes\Tag>,
     *     ExperimentConfig?: Shapes\ExperimentConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
