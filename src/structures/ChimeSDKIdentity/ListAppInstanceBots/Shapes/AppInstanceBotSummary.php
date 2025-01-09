<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceBots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppInstanceBotArn
 * @property string $Name
 * @property string $Metadata
 */
class AppInstanceBotSummary extends Shape
{
    /**
     * @param array{
     *     AppInstanceBotArn?: string,
     *     Name?: string,
     *     Metadata?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
