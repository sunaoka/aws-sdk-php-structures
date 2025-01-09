<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Content
 * @property list<Shapes\DocumentRequires> $Requires
 * @property list<Shapes\AttachmentsSource> $Attachments
 * @property string $Name
 * @property string $DisplayName
 * @property string $VersionName
 * @property 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup' $DocumentType
 * @property 'YAML'|'JSON'|'TEXT' $DocumentFormat
 * @property string $TargetType
 * @property list<Shapes\Tag> $Tags
 */
class CreateDocumentRequest extends Request
{
    /**
     * @param array{
     *     Content: string,
     *     Requires?: list<Shapes\DocumentRequires>,
     *     Attachments?: list<Shapes\AttachmentsSource>,
     *     Name: string,
     *     DisplayName?: string,
     *     VersionName?: string,
     *     DocumentType?: 'Command'|'Policy'|'Automation'|'Session'|'Package'|'ApplicationConfiguration'|'ApplicationConfigurationSchema'|'DeploymentStrategy'|'ChangeCalendar'|'Automation.ChangeTemplate'|'ProblemAnalysis'|'ProblemAnalysisTemplate'|'CloudFormation'|'ConformancePackTemplate'|'QuickSetup',
     *     DocumentFormat?: 'YAML'|'JSON'|'TEXT',
     *     TargetType?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
