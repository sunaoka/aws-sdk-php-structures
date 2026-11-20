<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property \Aws\Api\DateTimeResult $synchronizedAt
 * @property string|null $versionId
 * @property string|null $eTag
 */
class S3SynchronizedSource extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     synchronizedAt: \Aws\Api\DateTimeResult,
     *     versionId?: string|null,
     *     eTag?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
