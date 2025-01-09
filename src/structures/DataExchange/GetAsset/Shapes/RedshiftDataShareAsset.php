<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 */
class RedshiftDataShareAsset extends Shape
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
