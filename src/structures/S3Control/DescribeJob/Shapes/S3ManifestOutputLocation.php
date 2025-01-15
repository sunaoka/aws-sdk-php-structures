<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExpectedManifestBucketOwner
 * @property string $Bucket
 * @property string|null $ManifestPrefix
 * @property GeneratedManifestEncryption|null $ManifestEncryption
 * @property 'S3InventoryReport_CSV_20211130' $ManifestFormat
 */
class S3ManifestOutputLocation extends Shape
{
    /**
     * @param array{
     *     ExpectedManifestBucketOwner?: string|null,
     *     Bucket: string,
     *     ManifestPrefix?: string|null,
     *     ManifestEncryption?: GeneratedManifestEncryption|null,
     *     ManifestFormat: 'S3InventoryReport_CSV_20211130'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
