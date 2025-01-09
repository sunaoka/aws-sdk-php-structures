<?php

namespace Sunaoka\Aws\Structures\Amplify\GetBranch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stackArn
 */
class Backend extends Shape
{
    /**
     * @param array{stackArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
