<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property list<string> $InclusionPrefixes
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property DocumentsMetadataConfiguration $DocumentsMetadataConfiguration
 * @property AccessControlListConfiguration $AccessControlListConfiguration
 */
class S3DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     InclusionPrefixes?: list<string>,
     *     InclusionPatterns?: list<string>,
     *     ExclusionPatterns?: list<string>,
     *     DocumentsMetadataConfiguration?: DocumentsMetadataConfiguration,
     *     AccessControlListConfiguration?: AccessControlListConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
