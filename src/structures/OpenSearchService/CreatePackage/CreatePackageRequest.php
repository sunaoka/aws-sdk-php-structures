<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageName
 * @property 'TXT-DICTIONARY'|'ZIP-PLUGIN'|'PACKAGE-LICENSE'|'PACKAGE-CONFIG' $PackageType
 * @property string $PackageDescription
 * @property Shapes\PackageSource $PackageSource
 * @property Shapes\PackageConfiguration $PackageConfiguration
 * @property string $EngineVersion
 * @property Shapes\PackageVendingOptions $PackageVendingOptions
 * @property Shapes\PackageEncryptionOptions $PackageEncryptionOptions
 */
class CreatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageName: string,
     *     PackageType: 'TXT-DICTIONARY'|'ZIP-PLUGIN'|'PACKAGE-LICENSE'|'PACKAGE-CONFIG',
     *     PackageDescription?: string,
     *     PackageSource: Shapes\PackageSource,
     *     PackageConfiguration?: Shapes\PackageConfiguration,
     *     EngineVersion?: string,
     *     PackageVendingOptions?: Shapes\PackageVendingOptions,
     *     PackageEncryptionOptions?: Shapes\PackageEncryptionOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
