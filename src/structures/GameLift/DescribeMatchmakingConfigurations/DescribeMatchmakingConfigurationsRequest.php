<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmakingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property string $RuleSetName
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class DescribeMatchmakingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>,
     *     RuleSetName?: string,
     *     Limit?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
