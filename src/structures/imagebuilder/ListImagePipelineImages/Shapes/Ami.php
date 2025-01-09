<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelineImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property string $image
 * @property string $name
 * @property string $description
 * @property ImageState $state
 * @property string $accountId
 */
class Ami extends Shape
{
    /**
     * @param array{
     *     region?: string,
     *     image?: string,
     *     name?: string,
     *     description?: string,
     *     state?: ImageState,
     *     accountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
