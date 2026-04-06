<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListPluginTypeActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionIdentifier
 * @property string|null $displayName
 * @property string|null $instructionExample
 * @property string|null $description
 */
class ActionSummary extends Shape
{
    /**
     * @param array{
     *     actionIdentifier?: string|null,
     *     displayName?: string|null,
     *     instructionExample?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
