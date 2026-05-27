<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BlueprintItem>|null $blueprints
 * @property DocumentCustomOutputConfiguration|null $document
 */
class CustomOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     blueprints?: list<BlueprintItem>|null,
     *     document?: DocumentCustomOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
