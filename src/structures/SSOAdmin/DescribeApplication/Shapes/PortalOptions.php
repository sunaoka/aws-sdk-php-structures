<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SignInOptions|null $SignInOptions
 * @property 'ENABLED'|'DISABLED'|null $Visibility
 */
class PortalOptions extends Shape
{
    /**
     * @param array{
     *     SignInOptions?: SignInOptions|null,
     *     Visibility?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
