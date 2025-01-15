<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string|null $detectorId
 * @property string|null $detectorName
 * @property list<string>|null $detectorTags
 * @property string|null $generatorId
 * @property string|null $id
 * @property Remediation|null $remediation
 * @property Resource|null $resource
 * @property string|null $ruleId
 * @property 'Critical'|'High'|'Medium'|'Low'|'Info'|null $severity
 * @property 'Closed'|'Open'|'All'|null $status
 * @property string|null $title
 * @property string|null $type
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property Vulnerability|null $vulnerability
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     detectorId?: string|null,
     *     detectorName?: string|null,
     *     detectorTags?: list<string>|null,
     *     generatorId?: string|null,
     *     id?: string|null,
     *     remediation?: Remediation|null,
     *     resource?: Resource|null,
     *     ruleId?: string|null,
     *     severity?: 'Critical'|'High'|'Medium'|'Low'|'Info'|null,
     *     status?: 'Closed'|'Open'|'All'|null,
     *     title?: string|null,
     *     type?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     vulnerability?: Vulnerability|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
