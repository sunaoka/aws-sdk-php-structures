<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string|null $AccountId
 */
class DescribeApplicationRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
