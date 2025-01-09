<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Url
 */
class IngestEndpoint extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
