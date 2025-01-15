<?php

namespace Sunaoka\Aws\Structures\Ses\SendBulkTemplatedEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Destination $Destination
 * @property list<MessageTag>|null $ReplacementTags
 * @property string|null $ReplacementTemplateData
 */
class BulkEmailDestination extends Shape
{
    /**
     * @param array{
     *     Destination: Destination,
     *     ReplacementTags?: list<MessageTag>|null,
     *     ReplacementTemplateData?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
