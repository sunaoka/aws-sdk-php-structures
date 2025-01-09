<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $OrganizationalUnitDistinguishedName
 * @property string $FileSystemAdministratorsGroup
 * @property string $UserName
 * @property list<string> $DnsIps
 */
class SelfManagedActiveDirectoryAttributes extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     OrganizationalUnitDistinguishedName?: string,
     *     FileSystemAdministratorsGroup?: string,
     *     UserName?: string,
     *     DnsIps?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
