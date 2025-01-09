<?php

namespace Sunaoka\Aws\Structures\Ses\SetReceiptRulePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 * @property string $RuleName
 * @property string $After
 */
class SetReceiptRulePositionRequest extends Request
{
    /**
     * @param array{
     *     RuleSetName: string,
     *     RuleName: string,
     *     After?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
