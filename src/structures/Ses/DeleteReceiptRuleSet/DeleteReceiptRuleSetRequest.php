<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteReceiptRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 */
class DeleteReceiptRuleSetRequest extends Request
{
    /**
     * @param array{RuleSetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
