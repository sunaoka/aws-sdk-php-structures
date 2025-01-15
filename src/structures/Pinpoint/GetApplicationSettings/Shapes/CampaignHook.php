<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApplicationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LambdaFunctionName
 * @property 'DELIVERY'|'FILTER'|null $Mode
 * @property string|null $WebUrl
 */
class CampaignHook extends Shape
{
    /**
     * @param array{
     *     LambdaFunctionName?: string|null,
     *     Mode?: 'DELIVERY'|'FILTER'|null,
     *     WebUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
