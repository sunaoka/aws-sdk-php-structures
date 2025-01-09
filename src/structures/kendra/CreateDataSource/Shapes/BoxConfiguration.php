<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EnterpriseId
 * @property string $SecretArn
 * @property bool $UseChangeLog
 * @property bool $CrawlComments
 * @property bool $CrawlTasks
 * @property bool $CrawlWebLinks
 * @property list<DataSourceToIndexFieldMapping> $FileFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $TaskFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $CommentFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $WebLinkFieldMappings
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property DataSourceVpcConfiguration $VpcConfiguration
 */
class BoxConfiguration extends Shape
{
    /**
     * @param array{
     *     EnterpriseId: string,
     *     SecretArn: string,
     *     UseChangeLog?: bool,
     *     CrawlComments?: bool,
     *     CrawlTasks?: bool,
     *     CrawlWebLinks?: bool,
     *     FileFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     TaskFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     CommentFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     WebLinkFieldMappings?: list<DataSourceToIndexFieldMapping>,
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
