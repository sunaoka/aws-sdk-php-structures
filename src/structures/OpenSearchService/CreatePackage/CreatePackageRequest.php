<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageName
 * @property 'TXT-DICTIONARY'|'ZIP-PLUGIN'|'PACKAGE-LICENSE'|'PACKAGE-CONFIG' $PackageType
 * @property string|null $PackageDescription
 * @property Shapes\PackageSource $PackageSource
 * @property Shapes\PackageConfiguration|null $PackageConfiguration
 * @property string|null $EngineVersion
 * @property Shapes\PackageVendingOptions|null $PackageVendingOptions
 * @property Shapes\PackageEncryptionOptions|null $PackageEncryptionOptions
 */
class CreatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageName: string,
     *     PackageType: 'TXT-DICTIONARY'|'ZIP-PLUGIN'|'PACKAGE-LICENSE'|'PACKAGE-CONFIG',
     *     PackageDescription?: string|null,
     *     PackageSource: Shapes\PackageSource,
     *     PackageConfiguration?: Shapes\PackageConfiguration|null,
     *     EngineVersion?: string|null,
     *     PackageVendingOptions?: Shapes\PackageVendingOptions|null,
     *     PackageEncryptionOptions?: Shapes\PackageEncryptionOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
