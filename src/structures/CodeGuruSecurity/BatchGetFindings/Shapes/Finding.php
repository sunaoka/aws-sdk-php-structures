<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $detectorId
 * @property string $detectorName
 * @property list<string> $detectorTags
 * @property string $generatorId
 * @property string $id
 * @property Remediation $remediation
 * @property Resource $resource
 * @property string $ruleId
 * @property 'Critical'|'High'|'Medium'|'Low'|'Info' $severity
 * @property 'Closed'|'Open'|'All' $status
 * @property string $title
 * @property string $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property Vulnerability $vulnerability
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     detectorId?: string,
     *     detectorName?: string,
     *     detectorTags?: list<string>,
     *     generatorId?: string,
     *     id?: string,
     *     remediation?: Remediation,
     *     resource?: Resource,
     *     ruleId?: string,
     *     severity?: 'Critical'|'High'|'Medium'|'Low'|'Info',
     *     status?: 'Closed'|'Open'|'All',
     *     title?: string,
     *     type?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     vulnerability?: Vulnerability
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
