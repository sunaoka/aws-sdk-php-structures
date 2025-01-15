<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCACertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $templateBody
 * @property string|null $roleArn
 * @property string|null $templateName
 */
class RegistrationConfig extends Shape
{
    /**
     * @param array{
     *     templateBody?: string|null,
     *     roleArn?: string|null,
     *     templateName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
