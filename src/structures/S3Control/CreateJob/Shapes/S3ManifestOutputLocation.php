<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExpectedManifestBucketOwner
 * @property string $Bucket
 * @property string $ManifestPrefix
 * @property GeneratedManifestEncryption $ManifestEncryption
 * @property 'S3InventoryReport_CSV_20211130' $ManifestFormat
 */
class S3ManifestOutputLocation extends Shape
{
    /**
     * @param array{
     *     ExpectedManifestBucketOwner?: string,
     *     Bucket: string,
     *     ManifestPrefix?: string,
     *     ManifestEncryption?: GeneratedManifestEncryption,
     *     ManifestFormat: 'S3InventoryReport_CSV_20211130'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
