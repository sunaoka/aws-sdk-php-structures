<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrainingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingJobName
 * @property Shapes\ProfilerConfigForUpdate $ProfilerConfig
 * @property list<Shapes\ProfilerRuleConfiguration> $ProfilerRuleConfigurations
 * @property Shapes\ResourceConfigForUpdate $ResourceConfig
 * @property Shapes\RemoteDebugConfigForUpdate $RemoteDebugConfig
 */
class UpdateTrainingJobRequest extends Request
{
    /**
     * @param array{
     *     TrainingJobName: string,
     *     ProfilerConfig?: Shapes\ProfilerConfigForUpdate,
     *     ProfilerRuleConfigurations?: list<Shapes\ProfilerRuleConfiguration>,
     *     ResourceConfig?: Shapes\ResourceConfigForUpdate,
     *     RemoteDebugConfig?: Shapes\RemoteDebugConfigForUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
