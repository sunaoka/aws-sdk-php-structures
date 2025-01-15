<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $DisplayName
 * @property string|null $DocumentVersion
 * @property string|null $VersionName
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property bool|null $IsDefaultVersion
 * @property 'YAML'|'JSON'|'TEXT'|null $DocumentFormat
 * @property 'Creating'|'Active'|'Updating'|'Deleting'|'Failed'|null $Status
 * @property string|null $StatusInformation
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'|null $ReviewStatus
 */
class DocumentVersionInfo extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     DisplayName?: string|null,
     *     DocumentVersion?: string|null,
     *     VersionName?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     IsDefaultVersion?: bool|null,
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT'|null,
     *     Status?: 'Creating'|'Active'|'Updating'|'Deleting'|'Failed'|null,
     *     StatusInformation?: string|null,
     *     ReviewStatus?: 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
