<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteResourcePolicyStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $statementId
 * @property string $expectedRevisionId
 */
class DeleteResourcePolicyStatementRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     statementId: string,
     *     expectedRevisionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
