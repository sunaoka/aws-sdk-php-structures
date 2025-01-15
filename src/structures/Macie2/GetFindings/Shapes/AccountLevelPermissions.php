<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockPublicAccess|null $blockPublicAccess
 */
class AccountLevelPermissions extends Shape
{
    /**
     * @param array{blockPublicAccess?: BlockPublicAccess|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
