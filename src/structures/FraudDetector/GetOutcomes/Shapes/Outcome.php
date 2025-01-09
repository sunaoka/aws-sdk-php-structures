<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetOutcomes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $lastUpdatedTime
 * @property string $createdTime
 * @property string $arn
 */
class Outcome extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     lastUpdatedTime?: string,
     *     createdTime?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
