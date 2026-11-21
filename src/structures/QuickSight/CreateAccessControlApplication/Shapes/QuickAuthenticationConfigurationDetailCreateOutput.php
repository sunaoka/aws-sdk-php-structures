<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuickManagedPublicAuthCodeQuickAuthenticationConfig|null $QuickManagedPublicAuthCode
 */
class QuickAuthenticationConfigurationDetailCreateOutput extends Shape
{
    /**
     * @param array{QuickManagedPublicAuthCode?: QuickManagedPublicAuthCodeQuickAuthenticationConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
