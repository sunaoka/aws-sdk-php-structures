<?php

namespace Sunaoka\Aws\Structures\FSx\CreateStorageVirtualMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CreateSvmActiveDirectoryConfiguration $ActiveDirectoryConfiguration
 * @property string $ClientRequestToken
 * @property string $FileSystemId
 * @property string $Name
 * @property string $SvmAdminPassword
 * @property list<Shapes\Tag> $Tags
 * @property 'UNIX'|'NTFS'|'MIXED' $RootVolumeSecurityStyle
 */
class CreateStorageVirtualMachineRequest extends Request
{
    /**
     * @param array{
     *     ActiveDirectoryConfiguration?: Shapes\CreateSvmActiveDirectoryConfiguration,
     *     ClientRequestToken?: string,
     *     FileSystemId: string,
     *     Name: string,
     *     SvmAdminPassword?: string,
     *     Tags?: list<Shapes\Tag>,
     *     RootVolumeSecurityStyle?: 'UNIX'|'NTFS'|'MIXED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
