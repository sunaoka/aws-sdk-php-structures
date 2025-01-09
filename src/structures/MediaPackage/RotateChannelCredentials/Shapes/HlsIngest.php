<?php

namespace Sunaoka\Aws\Structures\MediaPackage\RotateChannelCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IngestEndpoint> $IngestEndpoints
 */
class HlsIngest extends Shape
{
    /**
     * @param array{IngestEndpoints?: list<IngestEndpoint>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
