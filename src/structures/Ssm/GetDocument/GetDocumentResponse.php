<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDocument;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $DisplayName
 * @property string|null $VersionName
 * @property string|null $DocumentVersion
 * @property 'Creating'|'Active'|'Updating'|'Deleting'|'Failed'|null $Status
 * @property string|null $StatusInformation
 * @property string|null $Content
 * @property 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup'|'ManualApprovalPolicy'|'AutoApprovalPolicy'|null $DocumentType
 * @property 'YAML'|'JSON'|'TEXT'|null $DocumentFormat
 * @property list<Shapes\DocumentRequires>|null $Requires
 * @property list<Shapes\AttachmentContent>|null $AttachmentsContent
 * @property 'APPROVED'|'NOT_REVIEWED'|'PENDING'|'REJECTED'|null $ReviewStatus
 */
class GetDocumentResponse extends Response
{
}
