<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRulesets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TargetArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRulesetsRequest extends Request
{
    /**
     * @param array{
     *     TargetArn?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
