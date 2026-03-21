<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AddDirectQueryDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceName
 * @property Shapes\DirectQueryDataSourceType $DataSourceType
 * @property string|null $Description
 * @property list<string>|null $OpenSearchArns
 * @property string|null $DataSourceAccessPolicy
 * @property list<Shapes\Tag>|null $TagList
 */
class AddDirectQueryDataSourceRequest extends Request
{
    /**
     * @param array{
     *     DataSourceName: string,
     *     DataSourceType: Shapes\DirectQueryDataSourceType,
     *     Description?: string|null,
     *     OpenSearchArns?: list<string>|null,
     *     DataSourceAccessPolicy?: string|null,
     *     TagList?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
