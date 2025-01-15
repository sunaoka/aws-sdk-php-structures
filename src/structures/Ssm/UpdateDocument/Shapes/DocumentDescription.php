<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Sha1
 * @property string|null $Hash
 * @property 'Sha256'|'Sha1'|null $HashType
 * @property string|null $Name
 * @property string|null $DisplayName
 * @property string|null $VersionName
 * @property string|null $Owner
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property 'Creating'|'Active'|'Updating'|'Deleting'|'Failed'|null $Status
 * @property string|null $StatusInformation
 * @property string|null $DocumentVersion
 * @property string|null $Description
 * @property list<DocumentParameter>|null $Parameters
 * @property list<'Windows'|'Linux'|'MacOS'>|null $PlatformTypes
 * @property 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup'|null $DocumentType
 * @property string|null $SchemaVersion
 * @property string|null $LatestVersion
 * @property string|null $DefaultVersion
 * @property 'YAML'|'JSON'|'TEXT'|null $DocumentFormat
 * @property string|null $TargetType
 * @property list<Tag>|null $Tags
 * @property list<AttachmentInformation>|null $AttachmentsInformation
 * @property list<DocumentRequires>|null $Requires
 * @property string|null $Author
 * @property list<ReviewInformation>|null $ReviewInformation
 * @property string|null $ApprovedVersion
 * @property string|null $PendingReviewVersion
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'|null $ReviewStatus
 * @property list<string>|null $Category
 * @property list<string>|null $CategoryEnum
 */
class DocumentDescription extends Shape
{
    /**
     * @param array{
     *     Sha1?: string|null,
     *     Hash?: string|null,
     *     HashType?: 'Sha256'|'Sha1'|null,
     *     Name?: string|null,
     *     DisplayName?: string|null,
     *     VersionName?: string|null,
     *     Owner?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'Creating'|'Active'|'Updating'|'Deleting'|'Failed'|null,
     *     StatusInformation?: string|null,
     *     DocumentVersion?: string|null,
     *     Description?: string|null,
     *     Parameters?: list<DocumentParameter>|null,
     *     PlatformTypes?: list<'Windows'|'Linux'|'MacOS'>|null,
     *     DocumentType?: 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup'|null,
     *     SchemaVersion?: string|null,
     *     LatestVersion?: string|null,
     *     DefaultVersion?: string|null,
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT'|null,
     *     TargetType?: string|null,
     *     Tags?: list<Tag>|null,
     *     AttachmentsInformation?: list<AttachmentInformation>|null,
     *     Requires?: list<DocumentRequires>|null,
     *     Author?: string|null,
     *     ReviewInformation?: list<ReviewInformation>|null,
     *     ApprovedVersion?: string|null,
     *     PendingReviewVersion?: string|null,
     *     ReviewStatus?: 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'|null,
     *     Category?: list<string>|null,
     *     CategoryEnum?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
