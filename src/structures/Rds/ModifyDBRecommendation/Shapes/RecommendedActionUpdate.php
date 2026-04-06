<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionId
 * @property string $Status
 */
class RecommendedActionUpdate extends Shape
{
    /**
     * @param array{
     *     ActionId: string,
     *     Status: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
