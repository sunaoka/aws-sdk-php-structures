<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferenceStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property string $description
 * @property SseConfig $sseConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class ReferenceStoreDetail extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     name?: string,
     *     description?: string,
     *     sseConfig?: SseConfig,
     *     creationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
