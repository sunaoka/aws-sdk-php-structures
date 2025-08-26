<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string|null $generatorId
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $type
 * @property 'Closed'|'Open'|'All'|null $status
 * @property ResourceShape|null $resource
 * @property Vulnerability|null $vulnerability
 * @property 'Critical'|'High'|'Medium'|'Low'|'Info'|null $severity
 * @property Remediation|null $remediation
 * @property string|null $title
 * @property list<string>|null $detectorTags
 * @property string|null $detectorId
 * @property string|null $detectorName
 * @property string|null $ruleId
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     generatorId?: string|null,
     *     id?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     type?: string|null,
     *     status?: 'Closed'|'Open'|'All'|null,
     *     resource?: ResourceShape|null,
     *     vulnerability?: Vulnerability|null,
     *     severity?: 'Critical'|'High'|'Medium'|'Low'|'Info'|null,
     *     remediation?: Remediation|null,
     *     title?: string|null,
     *     detectorTags?: list<string>|null,
     *     detectorId?: string|null,
     *     detectorName?: string|null,
     *     ruleId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
