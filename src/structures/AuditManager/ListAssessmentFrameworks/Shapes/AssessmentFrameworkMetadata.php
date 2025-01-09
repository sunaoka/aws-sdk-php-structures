<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentFrameworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property 'Standard'|'Custom' $type
 * @property string $name
 * @property string $description
 * @property string $logo
 * @property string $complianceType
 * @property int $controlsCount
 * @property int $controlSetsCount
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class AssessmentFrameworkMetadata extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     id?: string,
     *     type?: 'Standard'|'Custom',
     *     name?: string,
     *     description?: string,
     *     logo?: string,
     *     complianceType?: string,
     *     controlsCount?: int,
     *     controlSetsCount?: int,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
