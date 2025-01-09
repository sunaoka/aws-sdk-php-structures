<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductArn
 * @property string $Id
 */
class RelatedFinding extends Shape
{
    /**
     * @param array{
     *     ProductArn: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
