<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AzureSubscription>|null $Subscriptions
 */
class ConfigurationTargets extends Shape
{
    /**
     * @param array{Subscriptions?: list<AzureSubscription>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
