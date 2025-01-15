<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConfiguration|null $vpcConfiguration
 * @property InternetConfiguration|null $internetConfiguration
 */
class NetworkOriginConfiguration extends Shape
{
    /**
     * @param array{
     *     vpcConfiguration?: VpcConfiguration|null,
     *     internetConfiguration?: InternetConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
