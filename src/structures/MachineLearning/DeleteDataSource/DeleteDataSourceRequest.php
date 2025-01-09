<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DeleteDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceId
 */
class DeleteDataSourceRequest extends Request
{
    /**
     * @param array{DataSourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
