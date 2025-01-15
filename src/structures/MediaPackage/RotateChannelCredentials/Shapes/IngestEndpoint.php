<?php

namespace Sunaoka\Aws\Structures\MediaPackage\RotateChannelCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Password
 * @property string|null $Url
 * @property string|null $Username
 */
class IngestEndpoint extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Password?: string|null,
     *     Url?: string|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
