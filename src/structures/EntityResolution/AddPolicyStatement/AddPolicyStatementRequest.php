<?php

namespace Sunaoka\Aws\Structures\EntityResolution\AddPolicyStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $statementId
 * @property 'Allow'|'Deny' $effect
 * @property list<string> $action
 * @property list<string> $principal
 * @property string|null $condition
 */
class AddPolicyStatementRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     statementId: string,
     *     effect: 'Allow'|'Deny',
     *     action: list<string>,
     *     principal: list<string>,
     *     condition?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
