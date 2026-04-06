<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string|null $OrganizationalUnitDistinguishedName
 * @property string|null $FileSystemAdministratorsGroup
 * @property string|null $UserName
 * @property string|null $Password
 * @property list<string> $DnsIps
 * @property string|null $DomainJoinServiceAccountSecret
 */
class SelfManagedActiveDirectoryConfiguration extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     OrganizationalUnitDistinguishedName?: string|null,
     *     FileSystemAdministratorsGroup?: string|null,
     *     UserName?: string|null,
     *     Password?: string|null,
     *     DnsIps: list<string>,
     *     DomainJoinServiceAccountSecret?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
