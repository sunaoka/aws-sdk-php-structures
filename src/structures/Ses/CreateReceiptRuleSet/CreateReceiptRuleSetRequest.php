<?php

namespace Sunaoka\Aws\Structures\Ses\CreateReceiptRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 */
class CreateReceiptRuleSetRequest extends Request
{
    /**
     * @param array{RuleSetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
