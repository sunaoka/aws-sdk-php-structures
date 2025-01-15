<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $EventBusName
 */
class DescribeRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventBusName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
