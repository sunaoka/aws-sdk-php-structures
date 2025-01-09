<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $AccountId
 */
class DescribeApplicationRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
