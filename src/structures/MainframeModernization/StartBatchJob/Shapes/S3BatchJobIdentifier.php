<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\StartBatchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property JobIdentifier $identifier
 * @property string|null $keyPrefix
 */
class S3BatchJobIdentifier extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     identifier: JobIdentifier,
     *     keyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
