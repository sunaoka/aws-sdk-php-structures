<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $aiAgentId
 * @property string $orchestratorUseCase
 */
class OrchestratorConfigurationEntry extends Shape
{
    /**
     * @param array{
     *     aiAgentId?: string|null,
     *     orchestratorUseCase: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
