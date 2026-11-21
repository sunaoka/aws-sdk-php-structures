<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUICK_MANAGED_PUBLIC_AUTH_CODE' $QuickAuthenticationType
 * @property QuickAuthenticationConfigurationDetail|null $QuickAuthenticationConfigurationDetail
 */
class QuickAuthenticationConfig extends Shape
{
    /**
     * @param array{
     *     QuickAuthenticationType: 'QUICK_MANAGED_PUBLIC_AUTH_CODE',
     *     QuickAuthenticationConfigurationDetail?: QuickAuthenticationConfigurationDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
