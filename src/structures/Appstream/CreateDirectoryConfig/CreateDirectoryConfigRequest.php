<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateDirectoryConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryName
 * @property list<string> $OrganizationalUnitDistinguishedNames
 * @property Shapes\ServiceAccountCredentials $ServiceAccountCredentials
 * @property Shapes\CertificateBasedAuthProperties $CertificateBasedAuthProperties
 */
class CreateDirectoryConfigRequest extends Request
{
    /**
     * @param array{
     *     DirectoryName: string,
     *     OrganizationalUnitDistinguishedNames: list<string>,
     *     ServiceAccountCredentials?: Shapes\ServiceAccountCredentials,
     *     CertificateBasedAuthProperties?: Shapes\CertificateBasedAuthProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
