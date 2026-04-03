<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeDataAutomationLibraryIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $entityIds
 */
class DeleteEntitiesInfo extends Shape
{
    /**
     * @param array{entityIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
