<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateDirectoryConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryName
 * @property list<string> $OrganizationalUnitDistinguishedNames
 * @property Shapes\ServiceAccountCredentials|null $ServiceAccountCredentials
 * @property Shapes\CertificateBasedAuthProperties|null $CertificateBasedAuthProperties
 */
class CreateDirectoryConfigRequest extends Request
{
    /**
     * @param array{
     *     DirectoryName: string,
     *     OrganizationalUnitDistinguishedNames: list<string>,
     *     ServiceAccountCredentials?: Shapes\ServiceAccountCredentials|null,
     *     CertificateBasedAuthProperties?: Shapes\CertificateBasedAuthProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
