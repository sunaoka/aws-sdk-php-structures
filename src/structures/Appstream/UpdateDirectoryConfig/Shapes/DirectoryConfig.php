<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateDirectoryConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryName
 * @property list<string> $OrganizationalUnitDistinguishedNames
 * @property ServiceAccountCredentials $ServiceAccountCredentials
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property CertificateBasedAuthProperties $CertificateBasedAuthProperties
 */
class DirectoryConfig extends Shape
{
    /**
     * @param array{
     *     DirectoryName: string,
     *     OrganizationalUnitDistinguishedNames?: list<string>,
     *     ServiceAccountCredentials?: ServiceAccountCredentials,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     CertificateBasedAuthProperties?: CertificateBasedAuthProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
