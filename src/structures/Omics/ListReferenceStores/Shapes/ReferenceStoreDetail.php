<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferenceStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string|null $name
 * @property string|null $description
 * @property SseConfig|null $sseConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class ReferenceStoreDetail extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     name?: string|null,
     *     description?: string|null,
     *     sseConfig?: SseConfig|null,
     *     creationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
