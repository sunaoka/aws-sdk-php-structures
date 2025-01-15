<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SignInOptions|null $SignInOptions
 */
class UpdateApplicationPortalOptions extends Shape
{
    /**
     * @param array{SignInOptions?: SignInOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
