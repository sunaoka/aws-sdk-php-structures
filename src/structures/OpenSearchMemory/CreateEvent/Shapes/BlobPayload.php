<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'application/pdf'|'image/png'|'image/jpeg' $contentType
 * @property BlobSource $source
 */
class BlobPayload extends Shape
{
    /**
     * @param array{
     *     contentType: 'application/pdf'|'image/png'|'image/jpeg',
     *     source: BlobSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
