<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\DescribeStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DescribeStatementRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
