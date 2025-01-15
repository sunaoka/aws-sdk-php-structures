<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentFrameworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property 'Standard'|'Custom'|null $type
 * @property string|null $name
 * @property string|null $description
 * @property string|null $logo
 * @property string|null $complianceType
 * @property int|null $controlsCount
 * @property int|null $controlSetsCount
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class AssessmentFrameworkMetadata extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     type?: 'Standard'|'Custom'|null,
     *     name?: string|null,
     *     description?: string|null,
     *     logo?: string|null,
     *     complianceType?: string|null,
     *     controlsCount?: int|null,
     *     controlSetsCount?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
