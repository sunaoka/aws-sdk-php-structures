<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdateActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $configurationUrl
 * @property string|null $entityUrlTemplate
 * @property string|null $executionUrlTemplate
 * @property string|null $revisionUrlTemplate
 */
class ActionTypeUrls extends Shape
{
    /**
     * @param array{
     *     configurationUrl?: string|null,
     *     entityUrlTemplate?: string|null,
     *     executionUrlTemplate?: string|null,
     *     revisionUrlTemplate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
