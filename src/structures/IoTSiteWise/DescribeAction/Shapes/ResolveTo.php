<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 */
class ResolveTo extends Shape
{
    /**
     * @param array{assetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
