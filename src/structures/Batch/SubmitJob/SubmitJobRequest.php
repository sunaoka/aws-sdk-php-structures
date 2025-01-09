<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $jobQueue
 * @property string $shareIdentifier
 * @property int $schedulingPriorityOverride
 * @property Shapes\ArrayProperties $arrayProperties
 * @property list<Shapes\JobDependency> $dependsOn
 * @property string $jobDefinition
 * @property array<string, string> $parameters
 * @property Shapes\ContainerOverrides $containerOverrides
 * @property Shapes\NodeOverrides $nodeOverrides
 * @property Shapes\RetryStrategy $retryStrategy
 * @property bool $propagateTags
 * @property Shapes\JobTimeout $timeout
 * @property array<string, string> $tags
 * @property Shapes\EksPropertiesOverride $eksPropertiesOverride
 * @property Shapes\EcsPropertiesOverride $ecsPropertiesOverride
 */
class SubmitJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     jobQueue: string,
     *     shareIdentifier?: string,
     *     schedulingPriorityOverride?: int,
     *     arrayProperties?: Shapes\ArrayProperties,
     *     dependsOn?: list<Shapes\JobDependency>,
     *     jobDefinition: string,
     *     parameters?: array<string, string>,
     *     containerOverrides?: Shapes\ContainerOverrides,
     *     nodeOverrides?: Shapes\NodeOverrides,
     *     retryStrategy?: Shapes\RetryStrategy,
     *     propagateTags?: bool,
     *     timeout?: Shapes\JobTimeout,
     *     tags?: array<string, string>,
     *     eksPropertiesOverride?: Shapes\EksPropertiesOverride,
     *     ecsPropertiesOverride?: Shapes\EcsPropertiesOverride
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
