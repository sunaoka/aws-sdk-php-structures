<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aiAgentId
 * @property bool|null $enabled
 */
class AIAgentConfigurationData extends Shape
{
    /**
     * @param array{
     *     aiAgentId: string,
     *     enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
