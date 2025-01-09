<?php

namespace Sunaoka\Aws\Structures\Ses\SendBulkTemplatedEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Destination $Destination
 * @property list<MessageTag> $ReplacementTags
 * @property string $ReplacementTemplateData
 */
class BulkEmailDestination extends Shape
{
    /**
     * @param array{
     *     Destination: Destination,
     *     ReplacementTags?: list<MessageTag>,
     *     ReplacementTemplateData?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
