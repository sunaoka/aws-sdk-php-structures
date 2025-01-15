<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Url
 */
class IngestEndpoint extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
