<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeRulesetRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
