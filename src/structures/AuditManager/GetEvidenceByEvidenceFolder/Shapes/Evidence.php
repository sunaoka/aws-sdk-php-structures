<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceByEvidenceFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataSource
 * @property string $evidenceAwsAccountId
 * @property \Aws\Api\DateTimeResult $time
 * @property string $eventSource
 * @property string $eventName
 * @property string $evidenceByType
 * @property list<Resource> $resourcesIncluded
 * @property array<string, string> $attributes
 * @property string $iamId
 * @property string $complianceCheck
 * @property string $awsOrganization
 * @property string $awsAccountId
 * @property string $evidenceFolderId
 * @property string $id
 * @property string $assessmentReportSelection
 */
class Evidence extends Shape
{
    /**
     * @param array{
     *     dataSource?: string,
     *     evidenceAwsAccountId?: string,
     *     time?: \Aws\Api\DateTimeResult,
     *     eventSource?: string,
     *     eventName?: string,
     *     evidenceByType?: string,
     *     resourcesIncluded?: list<Resource>,
     *     attributes?: array<string, string>,
     *     iamId?: string,
     *     complianceCheck?: string,
     *     awsOrganization?: string,
     *     awsAccountId?: string,
     *     evidenceFolderId?: string,
     *     id?: string,
     *     assessmentReportSelection?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
