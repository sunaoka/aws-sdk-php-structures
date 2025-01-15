<?php

namespace Sunaoka\Aws\Structures\Ses\SetReceiptRulePosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 * @property string $RuleName
 * @property string|null $After
 */
class SetReceiptRulePositionRequest extends Request
{
    /**
     * @param array{
     *     RuleSetName: string,
     *     RuleName: string,
     *     After?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
