<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EnterpriseId
 * @property string $SecretArn
 * @property bool|null $UseChangeLog
 * @property bool|null $CrawlComments
 * @property bool|null $CrawlTasks
 * @property bool|null $CrawlWebLinks
 * @property list<DataSourceToIndexFieldMapping>|null $FileFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $TaskFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $CommentFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $WebLinkFieldMappings
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property DataSourceVpcConfiguration|null $VpcConfiguration
 */
class BoxConfiguration extends Shape
{
    /**
     * @param array{
     *     EnterpriseId: string,
     *     SecretArn: string,
     *     UseChangeLog?: bool|null,
     *     CrawlComments?: bool|null,
     *     CrawlTasks?: bool|null,
     *     CrawlWebLinks?: bool|null,
     *     FileFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     TaskFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     CommentFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     WebLinkFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
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
