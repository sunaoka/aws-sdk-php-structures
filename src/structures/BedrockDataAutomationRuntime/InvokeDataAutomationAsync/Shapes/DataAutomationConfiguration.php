<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomationAsync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataAutomationArn
 * @property 'LIVE'|'DEVELOPMENT'|null $stage
 */
class DataAutomationConfiguration extends Shape
{
    /**
     * @param array{
     *     dataAutomationArn: string,
     *     stage?: 'LIVE'|'DEVELOPMENT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
