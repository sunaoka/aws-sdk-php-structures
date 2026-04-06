<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec|null $DefaultResourceSpec
 */
class SpaceCodeEditorAppSettings extends Shape
{
    /**
     * @param array{DefaultResourceSpec?: ResourceSpec|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
