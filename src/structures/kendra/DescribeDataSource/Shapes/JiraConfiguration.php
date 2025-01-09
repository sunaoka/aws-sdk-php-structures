<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JiraAccountUrl
 * @property string $SecretArn
 * @property bool $UseChangeLog
 * @property list<string> $Project
 * @property list<string> $IssueType
 * @property list<string> $Status
 * @property list<'COMMENTS'|'ATTACHMENTS'|'WORKLOGS'> $IssueSubEntityFilter
 * @property list<DataSourceToIndexFieldMapping> $AttachmentFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $CommentFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $IssueFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $ProjectFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $WorkLogFieldMappings
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property DataSourceVpcConfiguration $VpcConfiguration
 */
class JiraConfiguration extends Shape
{
    /**
     * @param array{
     *     JiraAccountUrl: string,
     *     SecretArn: string,
     *     UseChangeLog?: bool,
     *     Project?: list<string>,
     *     IssueType?: list<string>,
     *     Status?: list<string>,
     *     IssueSubEntityFilter?: list<'COMMENTS'|'ATTACHMENTS'|'WORKLOGS'>,
     *     AttachmentFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     CommentFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     IssueFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     ProjectFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     WorkLogFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     InclusionPatterns?: list<string>,
     *     ExclusionPatterns?: list<string>,
     *     VpcConfiguration?: DataSourceVpcConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
