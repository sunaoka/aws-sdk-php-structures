<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DeleteRuleset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteRulesetRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
