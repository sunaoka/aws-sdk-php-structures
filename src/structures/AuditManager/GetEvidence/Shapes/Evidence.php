<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataSource
 * @property string|null $evidenceAwsAccountId
 * @property \Aws\Api\DateTimeResult|null $time
 * @property string|null $eventSource
 * @property string|null $eventName
 * @property string|null $evidenceByType
 * @property list<Resource>|null $resourcesIncluded
 * @property array<string, string>|null $attributes
 * @property string|null $iamId
 * @property string|null $complianceCheck
 * @property string|null $awsOrganization
 * @property string|null $awsAccountId
 * @property string|null $evidenceFolderId
 * @property string|null $id
 * @property string|null $assessmentReportSelection
 */
class Evidence extends Shape
{
    /**
     * @param array{
     *     dataSource?: string|null,
     *     evidenceAwsAccountId?: string|null,
     *     time?: \Aws\Api\DateTimeResult|null,
     *     eventSource?: string|null,
     *     eventName?: string|null,
     *     evidenceByType?: string|null,
     *     resourcesIncluded?: list<Resource>|null,
     *     attributes?: array<string, string>|null,
     *     iamId?: string|null,
     *     complianceCheck?: string|null,
     *     awsOrganization?: string|null,
     *     awsAccountId?: string|null,
     *     evidenceFolderId?: string|null,
     *     id?: string|null,
     *     assessmentReportSelection?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
