<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QInConnectAssistantConfiguration|null $qInConnectAssistantConfiguration
 */
class QInConnectIntentConfiguration extends Shape
{
    /**
     * @param array{qInConnectAssistantConfiguration?: QInConnectAssistantConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
