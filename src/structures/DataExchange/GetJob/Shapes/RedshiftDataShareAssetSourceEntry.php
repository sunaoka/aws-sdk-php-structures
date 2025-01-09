<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataShareArn
 */
class RedshiftDataShareAssetSourceEntry extends Shape
{
    /**
     * @param array{DataShareArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
