<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $region
 * @property string|null $image
 * @property string|null $name
 * @property string|null $description
 * @property ImageState|null $state
 * @property string|null $accountId
 */
class Ami extends Shape
{
    /**
     * @param array{
     *     region?: string|null,
     *     image?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     state?: ImageState|null,
     *     accountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
