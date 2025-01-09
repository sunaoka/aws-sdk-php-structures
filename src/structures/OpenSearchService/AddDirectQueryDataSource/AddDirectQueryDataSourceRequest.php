<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AddDirectQueryDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceName
 * @property Shapes\DirectQueryDataSourceType $DataSourceType
 * @property string $Description
 * @property list<string> $OpenSearchArns
 * @property list<Shapes\Tag> $TagList
 */
class AddDirectQueryDataSourceRequest extends Request
{
    /**
     * @param array{
     *     DataSourceName: string,
     *     DataSourceType: Shapes\DirectQueryDataSourceType,
     *     Description?: string,
     *     OpenSearchArns: list<string>,
     *     TagList?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
