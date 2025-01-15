<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessmentFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property 'Standard'|'Custom'|null $type
 * @property string|null $complianceType
 * @property string|null $description
 * @property string|null $logo
 * @property string|null $controlSources
 * @property list<ControlSet>|null $controlSets
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $createdBy
 * @property string|null $lastUpdatedBy
 * @property array<string, string>|null $tags
 */
class Framework extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     name?: string|null,
     *     type?: 'Standard'|'Custom'|null,
     *     complianceType?: string|null,
     *     description?: string|null,
     *     logo?: string|null,
     *     controlSources?: string|null,
     *     controlSets?: list<ControlSet>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     lastUpdatedBy?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
