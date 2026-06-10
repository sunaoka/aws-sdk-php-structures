<?php

namespace Sunaoka\Aws\Structures\Signin\DeleteResourcePermissionStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $statementId
 * @property string|null $clientToken
 */
class DeleteResourcePermissionStatementRequest extends Request
{
    /**
     * @param array{
     *     statementId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
