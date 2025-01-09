<?php

namespace Sunaoka\Aws\Structures\Lambda\RemovePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $StatementId
 * @property string $Qualifier
 * @property string $RevisionId
 */
class RemovePermissionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     StatementId: string,
     *     Qualifier?: string,
     *     RevisionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
