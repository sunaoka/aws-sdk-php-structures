<?php

namespace Sunaoka\Aws\Structures\Wickr\ListSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property string $networkId
 */
class WickrAwsNetworks extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     networkId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
