<?php

namespace Sunaoka\Aws\Structures\EntityResolution\AddPolicyStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $action
 * @property string $arn
 * @property string $condition
 * @property 'Allow'|'Deny' $effect
 * @property list<string> $principal
 * @property string $statementId
 */
class AddPolicyStatementRequest extends Request
{
    /**
     * @param array{
     *     action: list<string>,
     *     arn: string,
     *     condition?: string,
     *     effect: 'Allow'|'Deny',
     *     principal: list<string>,
     *     statementId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
