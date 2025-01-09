<?php

namespace Sunaoka\Aws\Structures\Panorama\CreatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BinaryPrefixLocation
 * @property string $Bucket
 * @property string $GeneratedPrefixLocation
 * @property string $ManifestPrefixLocation
 * @property string $RepoPrefixLocation
 */
class StorageLocation extends Shape
{
    /**
     * @param array{
     *     BinaryPrefixLocation: string,
     *     Bucket: string,
     *     GeneratedPrefixLocation: string,
     *     ManifestPrefixLocation: string,
     *     RepoPrefixLocation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
