<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageName
 * @property 'TXT-DICTIONARY' $PackageType
 * @property string $PackageDescription
 * @property Shapes\PackageSource $PackageSource
 */
class CreatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageName: string,
     *     PackageType: 'TXT-DICTIONARY',
     *     PackageDescription?: string,
     *     PackageSource: Shapes\PackageSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
