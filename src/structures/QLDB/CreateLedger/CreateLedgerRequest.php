<?php

namespace Sunaoka\Aws\Structures\QLDB\CreateLedger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property array<string, string> $Tags
 * @property 'ALLOW_ALL'|'STANDARD' $PermissionsMode
 * @property bool $DeletionProtection
 * @property string $KmsKey
 */
class CreateLedgerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Tags?: array<string, string>,
     *     PermissionsMode: 'ALLOW_ALL'|'STANDARD',
     *     DeletionProtection?: bool,
     *     KmsKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
