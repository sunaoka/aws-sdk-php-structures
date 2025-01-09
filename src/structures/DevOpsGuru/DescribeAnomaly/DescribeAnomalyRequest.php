<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $AccountId
 */
class DescribeAnomalyRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
