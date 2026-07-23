<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\DescribeStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int<1, 30>|null $WaitTimeSeconds
 */
class DescribeStatementRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     WaitTimeSeconds?: int<1, 30>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
