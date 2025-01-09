<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IndexId
 */
class DescribeDataSourceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IndexId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
