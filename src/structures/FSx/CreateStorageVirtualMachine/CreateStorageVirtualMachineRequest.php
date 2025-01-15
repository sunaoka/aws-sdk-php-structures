<?php

namespace Sunaoka\Aws\Structures\FSx\CreateStorageVirtualMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CreateSvmActiveDirectoryConfiguration|null $ActiveDirectoryConfiguration
 * @property string|null $ClientRequestToken
 * @property string $FileSystemId
 * @property string $Name
 * @property string|null $SvmAdminPassword
 * @property list<Shapes\Tag>|null $Tags
 * @property 'UNIX'|'NTFS'|'MIXED'|null $RootVolumeSecurityStyle
 */
class CreateStorageVirtualMachineRequest extends Request
{
    /**
     * @param array{
     *     ActiveDirectoryConfiguration?: Shapes\CreateSvmActiveDirectoryConfiguration|null,
     *     ClientRequestToken?: string|null,
     *     FileSystemId: string,
     *     Name: string,
     *     SvmAdminPassword?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     RootVolumeSecurityStyle?: 'UNIX'|'NTFS'|'MIXED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
