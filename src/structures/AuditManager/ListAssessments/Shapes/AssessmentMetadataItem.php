<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $id
 * @property string|null $complianceType
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property list<Role>|null $roles
 * @property list<Delegation>|null $delegations
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 */
class AssessmentMetadataItem extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     id?: string|null,
     *     complianceType?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     roles?: list<Role>|null,
     *     delegations?: list<Delegation>|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
