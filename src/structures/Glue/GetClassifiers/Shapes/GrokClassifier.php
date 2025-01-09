<?php

namespace Sunaoka\Aws\Structures\Glue\GetClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Classification
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property int $Version
 * @property string $GrokPattern
 * @property string $CustomPatterns
 */
class GrokClassifier extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Classification: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     Version?: int,
     *     GrokPattern: string,
     *     CustomPatterns?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
