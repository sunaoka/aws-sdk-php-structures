<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IngestEndpoint>|null $IngestEndpoints
 */
class HlsIngest extends Shape
{
    /**
     * @param array{IngestEndpoints?: list<IngestEndpoint>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
