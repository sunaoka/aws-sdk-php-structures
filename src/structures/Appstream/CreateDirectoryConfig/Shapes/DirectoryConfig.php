<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateDirectoryConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryName
 * @property list<string>|null $OrganizationalUnitDistinguishedNames
 * @property ServiceAccountCredentials|null $ServiceAccountCredentials
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property CertificateBasedAuthProperties|null $CertificateBasedAuthProperties
 */
class DirectoryConfig extends Shape
{
    /**
     * @param array{
     *     DirectoryName: string,
     *     OrganizationalUnitDistinguishedNames?: list<string>|null,
     *     ServiceAccountCredentials?: ServiceAccountCredentials|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     CertificateBasedAuthProperties?: CertificateBasedAuthProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
