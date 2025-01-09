<?php

namespace Sunaoka\Aws\Structures\Ses\SetActiveReceiptRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 */
class SetActiveReceiptRuleSetRequest extends Request
{
    /**
     * @param array{RuleSetName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
