<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConfiguration $vpcConfiguration
 * @property InternetConfiguration $internetConfiguration
 */
class NetworkOriginConfiguration extends Shape
{
    /**
     * @param array{
     *     vpcConfiguration?: VpcConfiguration,
     *     internetConfiguration?: InternetConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
