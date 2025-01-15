<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|null $ruleOwnerFilter
 * @property string|null $regionFilter
 */
class ListRuleTypesRequest extends Request
{
    /**
     * @param array{
     *     ruleOwnerFilter?: 'AWS'|null,
     *     regionFilter?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
