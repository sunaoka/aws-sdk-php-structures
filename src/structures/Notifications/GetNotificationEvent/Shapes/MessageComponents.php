<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $headline
 * @property string|null $paragraphSummary
 * @property string|null $completeDescription
 * @property list<Dimension>|null $dimensions
 */
class MessageComponents extends Shape
{
    /**
     * @param array{
     *     headline?: string|null,
     *     paragraphSummary?: string|null,
     *     completeDescription?: string|null,
     *     dimensions?: list<Dimension>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
