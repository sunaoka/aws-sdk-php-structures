<?php

namespace Sunaoka\Aws\Structures\Iot\RegisterCACertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateBody
 * @property string $roleArn
 * @property string $templateName
 */
class RegistrationConfig extends Shape
{
    /**
     * @param array{
     *     templateBody?: string,
     *     roleArn?: string,
     *     templateName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
