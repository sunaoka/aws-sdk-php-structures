<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $RedirectUris
 */
class QuickManagedAuthCodeQuickAuthenticationConfigInput extends Shape
{
    /**
     * @param array{RedirectUris: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
