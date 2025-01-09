<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmakingRuleSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeMatchmakingRuleSetsRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
