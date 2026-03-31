<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateAgentSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $controlsScanning
 * @property bool $generalPurposeScanning
 */
class CodeReviewSettings extends Shape
{
    /**
     * @param array{
     *     controlsScanning: bool,
     *     generalPurposeScanning: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
