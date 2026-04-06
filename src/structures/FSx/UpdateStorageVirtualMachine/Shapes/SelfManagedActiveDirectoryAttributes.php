<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateStorageVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property string|null $OrganizationalUnitDistinguishedName
 * @property string|null $FileSystemAdministratorsGroup
 * @property string|null $UserName
 * @property list<string>|null $DnsIps
 */
class SelfManagedActiveDirectoryAttributes extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     OrganizationalUnitDistinguishedName?: string|null,
     *     FileSystemAdministratorsGroup?: string|null,
     *     UserName?: string|null,
     *     DnsIps?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
