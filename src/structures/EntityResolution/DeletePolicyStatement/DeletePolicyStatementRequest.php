<?php

namespace Sunaoka\Aws\Structures\EntityResolution\DeletePolicyStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $statementId
 */
class DeletePolicyStatementRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     statementId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
