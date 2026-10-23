<?php

namespace Sunaoka\Aws\Structures\Continuum\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $roleArn
 */
class S3Details extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
