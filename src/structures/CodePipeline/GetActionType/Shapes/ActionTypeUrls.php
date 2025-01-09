<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $configurationUrl
 * @property string $entityUrlTemplate
 * @property string $executionUrlTemplate
 * @property string $revisionUrlTemplate
 */
class ActionTypeUrls extends Shape
{
    /**
     * @param array{
     *     configurationUrl?: string,
     *     entityUrlTemplate?: string,
     *     executionUrlTemplate?: string,
     *     revisionUrlTemplate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
