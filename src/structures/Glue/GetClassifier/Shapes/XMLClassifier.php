<?php

namespace Sunaoka\Aws\Structures\Glue\GetClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Classification
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property int|null $Version
 * @property string|null $RowTag
 */
class XMLClassifier extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Classification: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Version?: int|null,
     *     RowTag?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
