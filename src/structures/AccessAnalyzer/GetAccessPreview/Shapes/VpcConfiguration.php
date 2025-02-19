<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vpcId
 */
class VpcConfiguration extends Shape
{
    /**
     * @param array{vpcId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
