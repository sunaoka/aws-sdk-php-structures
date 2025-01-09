<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteDirectQueryDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceName
 */
class DeleteDirectQueryDataSourceRequest extends Request
{
    /**
     * @param array{DataSourceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
