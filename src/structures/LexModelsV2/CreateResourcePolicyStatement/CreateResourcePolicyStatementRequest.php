<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateResourcePolicyStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $statementId
 * @property 'Allow'|'Deny' $effect
 * @property list<Shapes\Principal> $principal
 * @property list<string> $action
 * @property array<string, array<string, string>> $condition
 * @property string $expectedRevisionId
 */
class CreateResourcePolicyStatementRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     statementId: string,
     *     effect: 'Allow'|'Deny',
     *     principal: list<Shapes\Principal>,
     *     action: list<string>,
     *     condition?: array<string, array<string, string>>,
     *     expectedRevisionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
