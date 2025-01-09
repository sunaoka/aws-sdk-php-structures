<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockPublicAccess $blockPublicAccess
 */
class AccountLevelPermissions extends Shape
{
    /**
     * @param array{blockPublicAccess?: BlockPublicAccess} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
