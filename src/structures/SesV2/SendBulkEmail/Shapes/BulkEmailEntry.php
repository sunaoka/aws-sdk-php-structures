<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Destination $Destination
 * @property list<MessageTag> $ReplacementTags
 * @property ReplacementEmailContent $ReplacementEmailContent
 * @property list<MessageHeader> $ReplacementHeaders
 */
class BulkEmailEntry extends Shape
{
    /**
     * @param array{
     *     Destination: Destination,
     *     ReplacementTags?: list<MessageTag>,
     *     ReplacementEmailContent?: ReplacementEmailContent,
     *     ReplacementHeaders?: list<MessageHeader>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
