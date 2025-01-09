<?php

namespace Sunaoka\Aws\Structures\Ses\CloneReceiptRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 * @property string $OriginalRuleSetName
 */
class CloneReceiptRuleSetRequest extends Request
{
    /**
     * @param array{
     *     RuleSetName: string,
     *     OriginalRuleSetName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
