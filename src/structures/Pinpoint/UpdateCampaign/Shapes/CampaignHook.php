<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LambdaFunctionName
 * @property 'DELIVERY'|'FILTER' $Mode
 * @property string $WebUrl
 */
class CampaignHook extends Shape
{
    /**
     * @param array{
     *     LambdaFunctionName?: string,
     *     Mode?: 'DELIVERY'|'FILTER',
     *     WebUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
