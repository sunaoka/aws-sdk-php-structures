<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ExpirationInDays
 * @property 'BULK'|'STANDARD' $GlacierJobTier
 */
class S3InitiateRestoreObjectOperation extends Shape
{
    /**
     * @param array{
     *     ExpirationInDays?: int,
     *     GlacierJobTier?: 'BULK'|'STANDARD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
