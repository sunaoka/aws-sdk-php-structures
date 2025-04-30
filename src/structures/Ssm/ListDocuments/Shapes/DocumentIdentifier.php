<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $DisplayName
 * @property string|null $Owner
 * @property string|null $VersionName
 * @property list<'Windows'|'Linux'|'MacOS'>|null $PlatformTypes
 * @property string|null $DocumentVersion
 * @property 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup'|'ManualApprovalPolicy'|'AutoApprovalPolicy'|null $DocumentType
 * @property string|null $SchemaVersion
 * @property 'YAML'|'JSON'|'TEXT'|null $DocumentFormat
 * @property string|null $TargetType
 * @property list<Tag>|null $Tags
 * @property list<DocumentRequires>|null $Requires
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'|null $ReviewStatus
 * @property string|null $Author
 */
class DocumentIdentifier extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     DisplayName?: string|null,
     *     Owner?: string|null,
     *     VersionName?: string|null,
     *     PlatformTypes?: list<'Windows'|'Linux'|'MacOS'>|null,
     *     DocumentVersion?: string|null,
     *     DocumentType?: 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup'|'ManualApprovalPolicy'|'AutoApprovalPolicy'|null,
     *     SchemaVersion?: string|null,
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT'|null,
     *     TargetType?: string|null,
     *     Tags?: list<Tag>|null,
     *     Requires?: list<DocumentRequires>|null,
     *     ReviewStatus?: 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'|null,
     *     Author?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
