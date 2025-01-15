<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateResourcePolicyStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $statementId
 * @property 'Allow'|'Deny' $effect
 * @property list<Shapes\Principal> $principal
 * @property list<string> $action
 * @property array<string, array<string, string>>|null $condition
 * @property string|null $expectedRevisionId
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
     *     condition?: array<string, array<string, string>>|null,
     *     expectedRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
