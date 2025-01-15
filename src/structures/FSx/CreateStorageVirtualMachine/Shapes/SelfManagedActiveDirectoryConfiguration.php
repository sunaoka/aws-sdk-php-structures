<?php

namespace Sunaoka\Aws\Structures\FSx\CreateStorageVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string|null $OrganizationalUnitDistinguishedName
 * @property string|null $FileSystemAdministratorsGroup
 * @property string $UserName
 * @property string $Password
 * @property list<string> $DnsIps
 */
class SelfManagedActiveDirectoryConfiguration extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     OrganizationalUnitDistinguishedName?: string|null,
     *     FileSystemAdministratorsGroup?: string|null,
     *     UserName: string,
     *     Password: string,
     *     DnsIps: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
