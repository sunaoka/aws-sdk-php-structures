<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Sha1
 * @property string $Hash
 * @property 'Sha256'|'Sha1' $HashType
 * @property string $Name
 * @property string $DisplayName
 * @property string $VersionName
 * @property string $Owner
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property 'Creating'|'Active'|'Updating'|'Deleting'|'Failed' $Status
 * @property string $StatusInformation
 * @property string $DocumentVersion
 * @property string $Description
 * @property list<DocumentParameter> $Parameters
 * @property list<'Windows'|'Linux'|'MacOS'> $PlatformTypes
 * @property 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup' $DocumentType
 * @property string $SchemaVersion
 * @property string $LatestVersion
 * @property string $DefaultVersion
 * @property 'YAML'|'JSON'|'TEXT' $DocumentFormat
 * @property string $TargetType
 * @property list<Tag> $Tags
 * @property list<AttachmentInformation> $AttachmentsInformation
 * @property list<DocumentRequires> $Requires
 * @property string $Author
 * @property list<ReviewInformation> $ReviewInformation
 * @property string $ApprovedVersion
 * @property string $PendingReviewVersion
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED' $ReviewStatus
 * @property list<string> $Category
 * @property list<string> $CategoryEnum
 */
class DocumentDescription extends Shape
{
    /**
     * @param array{
     *     Sha1?: string,
     *     Hash?: string,
     *     HashType?: 'Sha256'|'Sha1',
     *     Name?: string,
     *     DisplayName?: string,
     *     VersionName?: string,
     *     Owner?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     Status?: 'Creating'|'Active'|'Updating'|'Deleting'|'Failed',
     *     StatusInformation?: string,
     *     DocumentVersion?: string,
     *     Description?: string,
     *     Parameters?: list<DocumentParameter>,
     *     PlatformTypes?: list<'Windows'|'Linux'|'MacOS'>,
     *     DocumentType?: 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup',
     *     SchemaVersion?: string,
     *     LatestVersion?: string,
     *     DefaultVersion?: string,
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT',
     *     TargetType?: string,
     *     Tags?: list<Tag>,
     *     AttachmentsInformation?: list<AttachmentInformation>,
     *     Requires?: list<DocumentRequires>,
     *     Author?: string,
     *     ReviewInformation?: list<ReviewInformation>,
     *     ApprovedVersion?: string,
     *     PendingReviewVersion?: string,
     *     ReviewStatus?: 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED',
     *     Category?: list<string>,
     *     CategoryEnum?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
