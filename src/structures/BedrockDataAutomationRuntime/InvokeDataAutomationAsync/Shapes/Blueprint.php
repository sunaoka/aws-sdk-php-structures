<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomationAsync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blueprintArn
 * @property string|null $version
 * @property 'DEVELOPMENT'|'LIVE'|null $stage
 */
class Blueprint extends Shape
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     version?: string|null,
     *     stage?: 'DEVELOPMENT'|'LIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
