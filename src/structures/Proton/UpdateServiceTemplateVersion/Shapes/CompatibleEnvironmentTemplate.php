<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $majorVersion
 * @property string $templateName
 */
class CompatibleEnvironmentTemplate extends Shape
{
    /**
     * @param array{
     *     majorVersion: string,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
