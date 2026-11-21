<?php

namespace Sunaoka\Aws\Structures\Textract\ListBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectArn
 */
class ProjectFilter extends Shape
{
    /**
     * @param array{ProjectArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
