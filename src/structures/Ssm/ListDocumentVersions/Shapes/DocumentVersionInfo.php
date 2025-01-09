<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DisplayName
 * @property string $DocumentVersion
 * @property string $VersionName
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property bool $IsDefaultVersion
 * @property 'YAML'|'JSON'|'TEXT' $DocumentFormat
 * @property 'Creating'|'Active'|'Updating'|'Deleting'|'Failed' $Status
 * @property string $StatusInformation
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED' $ReviewStatus
 */
class DocumentVersionInfo extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     DisplayName?: string,
     *     DocumentVersion?: string,
     *     VersionName?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     IsDefaultVersion?: bool,
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT',
     *     Status?: 'Creating'|'Active'|'Updating'|'Deleting'|'Failed',
     *     StatusInformation?: string,
     *     ReviewStatus?: 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
