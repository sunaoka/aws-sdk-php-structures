<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucketMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Expiration
 * @property int|null $Days
 */
class RecordExpiration extends Shape
{
    /**
     * @param array{
     *     Expiration: 'ENABLED'|'DISABLED',
     *     Days?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
