<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDirectQueryDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceName
 * @property Shapes\DirectQueryDataSourceType $DataSourceType
 * @property string|null $Description
 * @property list<string> $OpenSearchArns
 */
class UpdateDirectQueryDataSourceRequest extends Request
{
    /**
     * @param array{
     *     DataSourceName: string,
     *     DataSourceType: Shapes\DirectQueryDataSourceType,
     *     Description?: string|null,
     *     OpenSearchArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
