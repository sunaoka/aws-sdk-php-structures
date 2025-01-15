<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JiraAccountUrl
 * @property string $SecretArn
 * @property bool|null $UseChangeLog
 * @property list<string>|null $Project
 * @property list<string>|null $IssueType
 * @property list<string>|null $Status
 * @property list<'COMMENTS'|'ATTACHMENTS'|'WORKLOGS'>|null $IssueSubEntityFilter
 * @property list<DataSourceToIndexFieldMapping>|null $AttachmentFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $CommentFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $IssueFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $ProjectFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $WorkLogFieldMappings
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property DataSourceVpcConfiguration|null $VpcConfiguration
 */
class JiraConfiguration extends Shape
{
    /**
     * @param array{
     *     JiraAccountUrl: string,
     *     SecretArn: string,
     *     UseChangeLog?: bool|null,
     *     Project?: list<string>|null,
     *     IssueType?: list<string>|null,
     *     Status?: list<string>|null,
     *     IssueSubEntityFilter?: list<'COMMENTS'|'ATTACHMENTS'|'WORKLOGS'>|null,
     *     AttachmentFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     CommentFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     IssueFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     ProjectFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     WorkLogFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     InclusionPatterns?: list<string>|null,
     *     ExclusionPatterns?: list<string>|null,
     *     VpcConfiguration?: DataSourceVpcConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
