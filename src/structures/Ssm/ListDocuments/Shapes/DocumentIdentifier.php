<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $DisplayName
 * @property string $Owner
 * @property string $VersionName
 * @property list<'Windows'|'Linux'|'MacOS'> $PlatformTypes
 * @property string $DocumentVersion
 * @property 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup' $DocumentType
 * @property string $SchemaVersion
 * @property 'YAML'|'JSON'|'TEXT' $DocumentFormat
 * @property string $TargetType
 * @property list<Tag> $Tags
 * @property list<DocumentRequires> $Requires
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED' $ReviewStatus
 * @property string $Author
 */
class DocumentIdentifier extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     DisplayName?: string,
     *     Owner?: string,
     *     VersionName?: string,
     *     PlatformTypes?: list<'Windows'|'Linux'|'MacOS'>,
     *     DocumentVersion?: string,
     *     DocumentType?: 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup',
     *     SchemaVersion?: string,
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT',
     *     TargetType?: string,
     *     Tags?: list<Tag>,
     *     Requires?: list<DocumentRequires>,
     *     ReviewStatus?: 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED',
     *     Author?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
