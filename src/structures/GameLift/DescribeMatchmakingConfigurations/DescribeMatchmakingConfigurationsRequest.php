<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmakingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Names
 * @property string|null $RuleSetName
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class DescribeMatchmakingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     RuleSetName?: string|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
