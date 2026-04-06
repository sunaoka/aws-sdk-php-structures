<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageName
 * @property 'TXT-DICTIONARY'|'ZIP-PLUGIN' $PackageType
 * @property string|null $PackageDescription
 * @property Shapes\PackageSource $PackageSource
 */
class CreatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageName: string,
     *     PackageType: 'TXT-DICTIONARY'|'ZIP-PLUGIN',
     *     PackageDescription?: string|null,
     *     PackageSource: Shapes\PackageSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
