<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomationAsync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blueprintArn
 * @property string $version
 * @property 'DEVELOPMENT'|'LIVE' $stage
 */
class Blueprint extends Shape
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     version?: string,
     *     stage?: 'DEVELOPMENT'|'LIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
