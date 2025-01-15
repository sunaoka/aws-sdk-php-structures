<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Destination $Destination
 * @property list<MessageTag>|null $ReplacementTags
 * @property ReplacementEmailContent|null $ReplacementEmailContent
 * @property list<MessageHeader>|null $ReplacementHeaders
 */
class BulkEmailEntry extends Shape
{
    /**
     * @param array{
     *     Destination: Destination,
     *     ReplacementTags?: list<MessageTag>|null,
     *     ReplacementEmailContent?: ReplacementEmailContent|null,
     *     ReplacementHeaders?: list<MessageHeader>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
