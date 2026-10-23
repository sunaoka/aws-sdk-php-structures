<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $roleArn
 * @property string $externalId
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     roleArn: string,
     *     externalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
