<?php

namespace Sunaoka\Aws\Structures\Glue\GetClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property int $Version
 * @property string $JsonPath
 */
class JsonClassifier extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     Version?: int,
     *     JsonPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
