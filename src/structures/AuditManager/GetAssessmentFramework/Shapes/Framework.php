<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessmentFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property 'Standard'|'Custom' $type
 * @property string $complianceType
 * @property string $description
 * @property string $logo
 * @property string $controlSources
 * @property list<ControlSet> $controlSets
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $createdBy
 * @property string $lastUpdatedBy
 * @property array<string, string> $tags
 */
class Framework extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     id?: string,
     *     name?: string,
     *     type?: 'Standard'|'Custom',
     *     complianceType?: string,
     *     description?: string,
     *     logo?: string,
     *     controlSources?: string,
     *     controlSets?: list<ControlSet>,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     lastUpdatedBy?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
