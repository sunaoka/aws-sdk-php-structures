<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDocument;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $DisplayName
 * @property string $VersionName
 * @property string $DocumentVersion
 * @property 'Creating'|'Active'|'Updating'|'Deleting'|'Failed' $Status
 * @property string $StatusInformation
 * @property string $Content
 * @property 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup' $DocumentType
 * @property 'YAML'|'JSON'|'TEXT' $DocumentFormat
 * @property list<Shapes\DocumentRequires> $Requires
 * @property list<Shapes\AttachmentContent> $AttachmentsContent
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED' $ReviewStatus
 */
class GetDocumentResponse extends Response
{
}
