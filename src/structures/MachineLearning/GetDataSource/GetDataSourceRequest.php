<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceId
 * @property bool $Verbose
 */
class GetDataSourceRequest extends Request
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     Verbose?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
