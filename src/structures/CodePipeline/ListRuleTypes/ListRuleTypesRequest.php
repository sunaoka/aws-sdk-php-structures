<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS' $ruleOwnerFilter
 * @property string $regionFilter
 */
class ListRuleTypesRequest extends Request
{
    /**
     * @param array{
     *     ruleOwnerFilter?: 'AWS',
     *     regionFilter?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
