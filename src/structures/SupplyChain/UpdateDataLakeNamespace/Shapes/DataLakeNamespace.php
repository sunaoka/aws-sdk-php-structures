<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataLakeNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 * @property string $name
 * @property string $arn
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 */
class DataLakeNamespace extends Shape
{
    /**
     * @param array{
     *     instanceId: string,
     *     name: string,
     *     arn: string,
     *     description?: string|null,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
