<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListRuleNamesByTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetArn
 * @property string $EventBusName
 * @property string $NextToken
 * @property int<1, 100> $Limit
 */
class ListRuleNamesByTargetRequest extends Request
{
    /**
     * @param array{
     *     TargetArn: string,
     *     EventBusName?: string,
     *     NextToken?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
