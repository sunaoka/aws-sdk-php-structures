<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property list<string>|null $InclusionPrefixes
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property DocumentsMetadataConfiguration|null $DocumentsMetadataConfiguration
 * @property AccessControlListConfiguration|null $AccessControlListConfiguration
 */
class S3DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     InclusionPrefixes?: list<string>|null,
     *     InclusionPatterns?: list<string>|null,
     *     ExclusionPatterns?: list<string>|null,
     *     DocumentsMetadataConfiguration?: DocumentsMetadataConfiguration|null,
     *     AccessControlListConfiguration?: AccessControlListConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
