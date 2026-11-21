<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUICK_MANAGED_PUBLIC_AUTH_CODE' $QuickAuthenticationType
 * @property QuickAuthenticationConfigurationDetailCreateOutput|null $QuickAuthenticationConfigurationDetailCreateOutput
 */
class QuickAuthenticationConfigCreateOutput extends Shape
{
    /**
     * @param array{
     *     QuickAuthenticationType: 'QUICK_MANAGED_PUBLIC_AUTH_CODE',
     *     QuickAuthenticationConfigurationDetailCreateOutput?: QuickAuthenticationConfigurationDetailCreateOutput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
