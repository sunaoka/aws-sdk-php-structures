<?php

namespace Sunaoka\Aws\Structures\signer\RemoveProfilePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileName
 * @property string $revisionId
 * @property string $statementId
 */
class RemoveProfilePermissionRequest extends Request
{
    /**
     * @param array{
     *     profileName: string,
     *     revisionId: string,
     *     statementId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
