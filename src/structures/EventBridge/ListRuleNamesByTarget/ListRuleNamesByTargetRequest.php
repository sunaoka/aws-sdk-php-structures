<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListRuleNamesByTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetArn
 * @property string|null $EventBusName
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class ListRuleNamesByTargetRequest extends Request
{
    /**
     * @param array{
     *     TargetArn: string,
     *     EventBusName?: string|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
