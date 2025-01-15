<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property string|null $lastUpdatedTime
 * @property string|null $createdTime
 * @property string|null $arn
 */
class Label extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     lastUpdatedTime?: string|null,
     *     createdTime?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
