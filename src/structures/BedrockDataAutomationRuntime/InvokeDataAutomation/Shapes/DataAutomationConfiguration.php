<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataAutomationProjectArn
 * @property 'LIVE'|'DEVELOPMENT'|null $stage
 */
class DataAutomationConfiguration extends Shape
{
    /**
     * @param array{
     *     dataAutomationProjectArn: string,
     *     stage?: 'LIVE'|'DEVELOPMENT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
