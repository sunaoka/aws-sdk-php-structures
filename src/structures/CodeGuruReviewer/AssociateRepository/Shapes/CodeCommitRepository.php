<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\AssociateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class CodeCommitRepository extends Shape
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
