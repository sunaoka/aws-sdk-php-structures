<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property 'Standard'|'Custom'|'Core' $type
 * @property string $name
 * @property string $description
 * @property string $testingInformation
 * @property string $actionPlanTitle
 * @property string $actionPlanInstructions
 * @property string $controlSources
 * @property list<ControlMappingSource> $controlMappingSources
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $createdBy
 * @property string $lastUpdatedBy
 * @property array<string, string> $tags
 * @property 'ACTIVE'|'END_OF_SUPPORT' $state
 */
class Control extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     id?: string,
     *     type?: 'Standard'|'Custom'|'Core',
     *     name?: string,
     *     description?: string,
     *     testingInformation?: string,
     *     actionPlanTitle?: string,
     *     actionPlanInstructions?: string,
     *     controlSources?: string,
     *     controlMappingSources?: list<ControlMappingSource>,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     lastUpdatedBy?: string,
     *     tags?: array<string, string>,
     *     state?: 'ACTIVE'|'END_OF_SUPPORT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
