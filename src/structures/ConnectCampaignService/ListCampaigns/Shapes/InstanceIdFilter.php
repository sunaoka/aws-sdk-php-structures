<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\ListCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property 'Eq' $operator
 */
class InstanceIdFilter extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     operator: 'Eq'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
