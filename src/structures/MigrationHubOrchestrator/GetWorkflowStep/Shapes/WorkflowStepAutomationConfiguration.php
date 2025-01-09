<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflowStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scriptLocationS3Bucket
 * @property PlatformScriptKey $scriptLocationS3Key
 * @property PlatformCommand $command
 * @property 'AWS'|'ONPREMISE' $runEnvironment
 * @property 'SINGLE'|'ALL'|'NONE' $targetType
 */
class WorkflowStepAutomationConfiguration extends Shape
{
    /**
     * @param array{
     *     scriptLocationS3Bucket?: string,
     *     scriptLocationS3Key?: PlatformScriptKey,
     *     command?: PlatformCommand,
     *     runEnvironment?: 'AWS'|'ONPREMISE',
     *     targetType?: 'SINGLE'|'ALL'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
