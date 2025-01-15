<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $spec
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 * @property string $templateName
 */
class ServicePipelineState extends Shape
{
    /**
     * @param array{
     *     spec?: string|null,
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
