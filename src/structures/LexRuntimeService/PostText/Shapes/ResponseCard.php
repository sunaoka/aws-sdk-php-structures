<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $version
 * @property 'application/vnd.amazonaws.card.generic'|null $contentType
 * @property list<GenericAttachment>|null $genericAttachments
 */
class ResponseCard extends Shape
{
    /**
     * @param array{
     *     version?: string|null,
     *     contentType?: 'application/vnd.amazonaws.card.generic'|null,
     *     genericAttachments?: list<GenericAttachment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
