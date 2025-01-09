<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $headline
 * @property string $paragraphSummary
 * @property string $completeDescription
 * @property list<Dimension> $dimensions
 */
class MessageComponents extends Shape
{
    /**
     * @param array{
     *     headline?: string,
     *     paragraphSummary?: string,
     *     completeDescription?: string,
     *     dimensions?: list<Dimension>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
