<?php

namespace Sunaoka\Aws\Structures\Glue\GetClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Classification
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property int|null $Version
 * @property string $GrokPattern
 * @property string|null $CustomPatterns
 */
class GrokClassifier extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Classification: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Version?: int|null,
     *     GrokPattern: string,
     *     CustomPatterns?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
