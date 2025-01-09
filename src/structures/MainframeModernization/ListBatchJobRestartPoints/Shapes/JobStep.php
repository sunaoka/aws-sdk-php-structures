<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobRestartPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $procStepName
 * @property int $procStepNumber
 * @property string $stepCondCode
 * @property string $stepName
 * @property int $stepNumber
 * @property bool $stepRestartable
 */
class JobStep extends Shape
{
    /**
     * @param array{
     *     procStepName?: string,
     *     procStepNumber?: int,
     *     stepCondCode?: string,
     *     stepName?: string,
     *     stepNumber?: int,
     *     stepRestartable?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
