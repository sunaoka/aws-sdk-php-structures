<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListSafetyRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ControlPanelArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListSafetyRulesRequest extends Request
{
    /**
     * @param array{
     *     ControlPanelArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
