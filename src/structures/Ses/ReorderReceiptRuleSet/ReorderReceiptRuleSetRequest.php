<?php

namespace Sunaoka\Aws\Structures\Ses\ReorderReceiptRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 * @property list<string> $RuleNames
 */
class ReorderReceiptRuleSetRequest extends Request
{
    /**
     * @param array{
     *     RuleSetName: string,
     *     RuleNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
