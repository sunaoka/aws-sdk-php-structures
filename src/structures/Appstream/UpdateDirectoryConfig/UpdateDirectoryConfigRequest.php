<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateDirectoryConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryName
 * @property list<string>|null $OrganizationalUnitDistinguishedNames
 * @property Shapes\ServiceAccountCredentials|null $ServiceAccountCredentials
 * @property Shapes\CertificateBasedAuthProperties|null $CertificateBasedAuthProperties
 */
class UpdateDirectoryConfigRequest extends Request
{
    /**
     * @param array{
     *     DirectoryName: string,
     *     OrganizationalUnitDistinguishedNames?: list<string>|null,
     *     ServiceAccountCredentials?: Shapes\ServiceAccountCredentials|null,
     *     CertificateBasedAuthProperties?: Shapes\CertificateBasedAuthProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
