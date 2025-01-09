<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRulesets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListRulesetsRequest extends Request
{
    /**
     * @param array{
     *     TargetArn?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
