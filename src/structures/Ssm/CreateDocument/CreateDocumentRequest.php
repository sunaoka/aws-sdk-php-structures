<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Content
 * @property list<Shapes\DocumentRequires>|null $Requires
 * @property list<Shapes\AttachmentsSource>|null $Attachments
 * @property string $Name
 * @property string|null $DisplayName
 * @property string|null $VersionName
 * @property 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup'|null $DocumentType
 * @property 'YAML'|'JSON'|'TEXT'|null $DocumentFormat
 * @property string|null $TargetType
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDocumentRequest extends Request
{
    /**
     * @param array{
     *     Content: string,
     *     Requires?: list<Shapes\DocumentRequires>|null,
     *     Attachments?: list<Shapes\AttachmentsSource>|null,
     *     Name: string,
     *     DisplayName?: string|null,
     *     VersionName?: string|null,
     *     DocumentType?: 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup'|null,
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT'|null,
     *     TargetType?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
