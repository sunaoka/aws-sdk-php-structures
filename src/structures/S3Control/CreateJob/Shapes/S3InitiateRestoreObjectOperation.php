<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $ExpirationInDays
 * @property 'BULK'|'STANDARD'|null $GlacierJobTier
 */
class S3InitiateRestoreObjectOperation extends Shape
{
    /**
     * @param array{
     *     ExpirationInDays?: int<0, max>|null,
     *     GlacierJobTier?: 'BULK'|'STANDARD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
