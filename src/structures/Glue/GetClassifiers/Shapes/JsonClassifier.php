<?php

namespace Sunaoka\Aws\Structures\Glue\GetClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property int|null $Version
 * @property string $JsonPath
 */
class JsonClassifier extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Version?: int|null,
     *     JsonPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
