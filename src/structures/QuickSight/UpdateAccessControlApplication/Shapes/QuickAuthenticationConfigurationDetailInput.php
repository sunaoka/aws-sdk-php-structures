<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuickManagedAuthCodeQuickAuthenticationConfigInput|null $QuickManagedPublicAuthCode
 */
class QuickAuthenticationConfigurationDetailInput extends Shape
{
    /**
     * @param array{QuickManagedPublicAuthCode?: QuickManagedAuthCodeQuickAuthenticationConfigInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
