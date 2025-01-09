<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property 'application/vnd.amazonaws.card.generic' $contentType
 * @property list<GenericAttachment> $genericAttachments
 */
class ResponseCard extends Shape
{
    /**
     * @param array{
     *     version?: string,
     *     contentType?: 'application/vnd.amazonaws.card.generic',
     *     genericAttachments?: list<GenericAttachment>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
