<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListPluginTypeActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionIdentifier
 * @property string $displayName
 * @property string $instructionExample
 * @property string $description
 */
class ActionSummary extends Shape
{
    /**
     * @param array{
     *     actionIdentifier?: string,
     *     displayName?: string,
     *     instructionExample?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
