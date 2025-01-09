<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRulesets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListRulesetsRequest extends Request
{
    /**
     * @param array{
     *     TargetArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
