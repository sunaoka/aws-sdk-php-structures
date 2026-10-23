<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string|null $externalId
 */
class UpdateS3Configuration extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
