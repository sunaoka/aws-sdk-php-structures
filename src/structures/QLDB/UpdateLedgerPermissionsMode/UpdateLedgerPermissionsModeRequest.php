<?php

namespace Sunaoka\Aws\Structures\QLDB\UpdateLedgerPermissionsMode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'ALLOW_ALL'|'STANDARD' $PermissionsMode
 */
class UpdateLedgerPermissionsModeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     PermissionsMode: 'ALLOW_ALL'|'STANDARD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
