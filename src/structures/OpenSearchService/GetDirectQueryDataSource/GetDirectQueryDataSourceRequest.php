<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetDirectQueryDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceName
 */
class GetDirectQueryDataSourceRequest extends Request
{
    /**
     * @param array{DataSourceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
