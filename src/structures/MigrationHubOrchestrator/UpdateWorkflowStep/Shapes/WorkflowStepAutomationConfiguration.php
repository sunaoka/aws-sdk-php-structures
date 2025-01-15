<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateWorkflowStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scriptLocationS3Bucket
 * @property PlatformScriptKey|null $scriptLocationS3Key
 * @property PlatformCommand|null $command
 * @property 'AWS'|'ONPREMISE'|null $runEnvironment
 * @property 'SINGLE'|'ALL'|'NONE'|null $targetType
 */
class WorkflowStepAutomationConfiguration extends Shape
{
    /**
     * @param array{
     *     scriptLocationS3Bucket?: string|null,
     *     scriptLocationS3Key?: PlatformScriptKey|null,
     *     command?: PlatformCommand|null,
     *     runEnvironment?: 'AWS'|'ONPREMISE'|null,
     *     targetType?: 'SINGLE'|'ALL'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
