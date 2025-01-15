<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmakingRuleSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Names
 * @property int<1, 10>|null $Limit
 * @property string|null $NextToken
 */
class DescribeMatchmakingRuleSetsRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     Limit?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
