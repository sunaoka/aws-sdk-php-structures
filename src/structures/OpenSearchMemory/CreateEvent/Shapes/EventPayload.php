<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConversationalPayload|null $conversational
 * @property StructuredDataPayload|null $structuredData
 * @property BlobPayload|null $blob
 */
class EventPayload extends Shape
{
    /**
     * @param array{
     *     conversational?: ConversationalPayload|null,
     *     structuredData?: StructuredDataPayload|null,
     *     blob?: BlobPayload|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
