<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDirectQueryDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataSourceName
 * @property DirectQueryDataSourceType|null $DataSourceType
 * @property string|null $Description
 * @property list<string>|null $OpenSearchArns
 * @property string|null $DataSourceArn
 * @property list<Tag>|null $TagList
 */
class DirectQueryDataSource extends Shape
{
    /**
     * @param array{
     *     DataSourceName?: string|null,
     *     DataSourceType?: DirectQueryDataSourceType|null,
     *     Description?: string|null,
     *     OpenSearchArns?: list<string>|null,
     *     DataSourceArn?: string|null,
     *     TagList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
