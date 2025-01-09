<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spec
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 * @property string $templateName
 */
class EnvironmentState extends Shape
{
    /**
     * @param array{
     *     spec?: string,
     *     templateMajorVersion: string,
     *     templateMinorVersion: string,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
