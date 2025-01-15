<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessmentFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property 'Standard'|'Custom'|'Core'|null $type
 * @property string|null $name
 * @property string|null $description
 * @property string|null $testingInformation
 * @property string|null $actionPlanTitle
 * @property string|null $actionPlanInstructions
 * @property string|null $controlSources
 * @property list<ControlMappingSource>|null $controlMappingSources
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $createdBy
 * @property string|null $lastUpdatedBy
 * @property array<string, string>|null $tags
 * @property 'ACTIVE'|'END_OF_SUPPORT'|null $state
 */
class Control extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     type?: 'Standard'|'Custom'|'Core'|null,
     *     name?: string|null,
     *     description?: string|null,
     *     testingInformation?: string|null,
     *     actionPlanTitle?: string|null,
     *     actionPlanInstructions?: string|null,
     *     controlSources?: string|null,
     *     controlMappingSources?: list<ControlMappingSource>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     lastUpdatedBy?: string|null,
     *     tags?: array<string, string>|null,
     *     state?: 'ACTIVE'|'END_OF_SUPPORT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
