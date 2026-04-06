<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $emailOverviewAIPromptId
 * @property string|null $locale
 */
class EmailOverviewAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     emailOverviewAIPromptId?: string|null,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
