<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINK'|'DEEP_LINK'|'CLOSE' $ButtonAction
 * @property string|null $Link
 */
class OverrideButtonConfiguration extends Shape
{
    /**
     * @param array{
     *     ButtonAction: 'LINK'|'DEEP_LINK'|'CLOSE',
     *     Link?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
