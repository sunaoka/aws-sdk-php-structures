<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $Password
 * @property list<string> $DnsIps
 * @property string $DomainName
 * @property string $OrganizationalUnitDistinguishedName
 * @property string $FileSystemAdministratorsGroup
 */
class SelfManagedActiveDirectoryConfigurationUpdates extends Shape
{
    /**
     * @param array{
     *     UserName?: string,
     *     Password?: string,
     *     DnsIps?: list<string>,
     *     DomainName?: string,
     *     OrganizationalUnitDistinguishedName?: string,
     *     FileSystemAdministratorsGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
