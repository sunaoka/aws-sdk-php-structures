<?php

namespace Sunaoka\Aws\Structures\QLDB\CreateLedger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property array<string, string>|null $Tags
 * @property 'ALLOW_ALL'|'STANDARD' $PermissionsMode
 * @property bool|null $DeletionProtection
 * @property string|null $KmsKey
 */
class CreateLedgerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Tags?: array<string, string>|null,
     *     PermissionsMode: 'ALLOW_ALL'|'STANDARD',
     *     DeletionProtection?: bool|null,
     *     KmsKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
