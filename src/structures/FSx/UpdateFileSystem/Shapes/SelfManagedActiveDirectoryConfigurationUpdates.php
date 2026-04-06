<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserName
 * @property string|null $Password
 * @property list<string>|null $DnsIps
 * @property string|null $DomainName
 * @property string|null $OrganizationalUnitDistinguishedName
 * @property string|null $FileSystemAdministratorsGroup
 */
class SelfManagedActiveDirectoryConfigurationUpdates extends Shape
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     Password?: string|null,
     *     DnsIps?: list<string>|null,
     *     DomainName?: string|null,
     *     OrganizationalUnitDistinguishedName?: string|null,
     *     FileSystemAdministratorsGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
