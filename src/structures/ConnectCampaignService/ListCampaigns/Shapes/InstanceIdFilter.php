<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\ListCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Eq' $operator
 * @property string $value
 */
class InstanceIdFilter extends Shape
{
    /**
     * @param array{
     *     operator: 'Eq',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
