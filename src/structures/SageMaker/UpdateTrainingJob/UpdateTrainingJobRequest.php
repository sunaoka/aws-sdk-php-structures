<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrainingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingJobName
 * @property Shapes\ProfilerConfigForUpdate|null $ProfilerConfig
 * @property list<Shapes\ProfilerRuleConfiguration>|null $ProfilerRuleConfigurations
 * @property Shapes\ResourceConfigForUpdate|null $ResourceConfig
 * @property Shapes\RemoteDebugConfigForUpdate|null $RemoteDebugConfig
 */
class UpdateTrainingJobRequest extends Request
{
    /**
     * @param array{
     *     TrainingJobName: string,
     *     ProfilerConfig?: Shapes\ProfilerConfigForUpdate|null,
     *     ProfilerRuleConfigurations?: list<Shapes\ProfilerRuleConfiguration>|null,
     *     ResourceConfig?: Shapes\ResourceConfigForUpdate|null,
     *     RemoteDebugConfig?: Shapes\RemoteDebugConfigForUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
