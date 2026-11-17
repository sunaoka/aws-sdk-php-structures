<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\SearchEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property double|null $score
 * @property SystemMetadata|null $systemMetadata
 * @property array<string, string>|null $metadata
 * @property string|null $matchedContent
 */
class EventSearchSummary extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     score?: double|null,
     *     systemMetadata?: SystemMetadata|null,
     *     metadata?: array<string, string>|null,
     *     matchedContent?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
