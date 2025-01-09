<?php

namespace Sunaoka\Aws\Structures\signer\AddProfilePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileName
 * @property string $profileVersion
 * @property string $action
 * @property string $principal
 * @property string $revisionId
 * @property string $statementId
 */
class AddProfilePermissionRequest extends Request
{
    /**
     * @param array{
     *     profileName: string,
     *     profileVersion?: string,
     *     action: string,
     *     principal: string,
     *     revisionId?: string,
     *     statementId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
