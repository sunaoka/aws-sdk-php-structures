<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListSafetyRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ControlPanelArn
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSafetyRulesRequest extends Request
{
    /**
     * @param array{
     *     ControlPanelArn: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
