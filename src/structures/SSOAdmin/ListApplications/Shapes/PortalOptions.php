<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SignInOptions $SignInOptions
 * @property 'ENABLED'|'DISABLED' $Visibility
 */
class PortalOptions extends Shape
{
    /**
     * @param array{
     *     SignInOptions?: SignInOptions,
     *     Visibility?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
