<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDirectQueryDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceName
 * @property DirectQueryDataSourceType $DataSourceType
 * @property string $Description
 * @property list<string> $OpenSearchArns
 * @property string $DataSourceArn
 * @property list<Tag> $TagList
 */
class DirectQueryDataSource extends Shape
{
    /**
     * @param array{
     *     DataSourceName?: string,
     *     DataSourceType?: DirectQueryDataSourceType,
     *     Description?: string,
     *     OpenSearchArns?: list<string>,
     *     DataSourceArn?: string,
     *     TagList?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
