<?php

namespace Sunaoka\Aws\Structures\Iot\AssociateSbomWithPackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string $versionName
 * @property Shapes\Sbom $sbom
 * @property string $clientToken
 */
class AssociateSbomWithPackageVersionRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     versionName: string,
     *     sbom: Shapes\Sbom,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
