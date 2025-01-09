<?php

namespace Sunaoka\Aws\Structures\MediaPackage\RotateIngestEndpointCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Password
 * @property string $Url
 * @property string $Username
 */
class IngestEndpoint extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Password?: string,
     *     Url?: string,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
