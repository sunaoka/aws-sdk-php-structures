<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\StartBatchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property JobIdentifier $identifier
 * @property string $keyPrefix
 */
class S3BatchJobIdentifier extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     identifier: JobIdentifier,
     *     keyPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
