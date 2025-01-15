<?php

namespace Sunaoka\Aws\Structures\Ses\SetActiveReceiptRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RuleSetName
 */
class SetActiveReceiptRuleSetRequest extends Request
{
    /**
     * @param array{RuleSetName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
