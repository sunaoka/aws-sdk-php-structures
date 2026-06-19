<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DetachDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $dataSourceArn
 */
class DetachDataSourceRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     dataSourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
