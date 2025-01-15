<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceBots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppInstanceBotArn
 * @property string|null $Name
 * @property string|null $Metadata
 */
class AppInstanceBotSummary extends Shape
{
    /**
     * @param array{
     *     AppInstanceBotArn?: string|null,
     *     Name?: string|null,
     *     Metadata?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
