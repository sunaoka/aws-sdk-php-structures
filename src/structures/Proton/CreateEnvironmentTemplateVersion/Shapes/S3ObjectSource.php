<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironmentTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 */
class S3ObjectSource extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
