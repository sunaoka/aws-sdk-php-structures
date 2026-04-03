<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $libraryArn
 */
class DataAutomationLibraryFilter extends Shape
{
    /**
     * @param array{libraryArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
