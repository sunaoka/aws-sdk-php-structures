<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $OrganizationalUnitDistinguishedName
 * @property string $FileSystemAdministratorsGroup
 * @property string $UserName
 * @property string $Password
 * @property list<string> $DnsIps
 */
class SelfManagedActiveDirectoryConfiguration extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     OrganizationalUnitDistinguishedName?: string,
     *     FileSystemAdministratorsGroup?: string,
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
