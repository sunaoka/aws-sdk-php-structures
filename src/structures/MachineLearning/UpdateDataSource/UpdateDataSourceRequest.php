<?php

namespace Sunaoka\Aws\Structures\MachineLearning\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceId
 * @property string $DataSourceName
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     DataSourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
