<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $jobQueue
 * @property string|null $shareIdentifier
 * @property int|null $schedulingPriorityOverride
 * @property Shapes\ArrayProperties|null $arrayProperties
 * @property list<Shapes\JobDependency>|null $dependsOn
 * @property string $jobDefinition
 * @property array<string, string>|null $parameters
 * @property Shapes\ContainerOverrides|null $containerOverrides
 * @property Shapes\NodeOverrides|null $nodeOverrides
 * @property Shapes\RetryStrategy|null $retryStrategy
 * @property bool|null $propagateTags
 * @property Shapes\JobTimeout|null $timeout
 * @property array<string, string>|null $tags
 * @property Shapes\EksPropertiesOverride|null $eksPropertiesOverride
 * @property Shapes\EcsPropertiesOverride|null $ecsPropertiesOverride
 * @property Shapes\ConsumableResourceProperties|null $consumableResourcePropertiesOverride
 */
class SubmitJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     jobQueue: string,
     *     shareIdentifier?: string|null,
     *     schedulingPriorityOverride?: int|null,
     *     arrayProperties?: Shapes\ArrayProperties|null,
     *     dependsOn?: list<Shapes\JobDependency>|null,
     *     jobDefinition: string,
     *     parameters?: array<string, string>|null,
     *     containerOverrides?: Shapes\ContainerOverrides|null,
     *     nodeOverrides?: Shapes\NodeOverrides|null,
     *     retryStrategy?: Shapes\RetryStrategy|null,
     *     propagateTags?: bool|null,
     *     timeout?: Shapes\JobTimeout|null,
     *     tags?: array<string, string>|null,
     *     eksPropertiesOverride?: Shapes\EksPropertiesOverride|null,
     *     ecsPropertiesOverride?: Shapes\EcsPropertiesOverride|null,
     *     consumableResourcePropertiesOverride?: Shapes\ConsumableResourceProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
