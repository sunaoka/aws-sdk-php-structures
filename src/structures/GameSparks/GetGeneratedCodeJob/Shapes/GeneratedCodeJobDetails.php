<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetGeneratedCodeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property string|null $GeneratedCodeJobId
 * @property string|null $S3Url
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PENDING'|null $Status
 */
class GeneratedCodeJobDetails extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     GeneratedCodeJobId?: string|null,
     *     S3Url?: string|null,
     *     Status?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
