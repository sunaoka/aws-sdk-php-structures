<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property string|null $FeedbackForwardingAddress
 * @property string|null $FromAddress
 * @property RawEmail|null $RawEmail
 * @property list<string>|null $ReplyToAddresses
 * @property SimpleEmail|null $SimpleEmail
 * @property array<string, list<string>>|null $Substitutions
 */
class EmailMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     FeedbackForwardingAddress?: string|null,
     *     FromAddress?: string|null,
     *     RawEmail?: RawEmail|null,
     *     ReplyToAddresses?: list<string>|null,
     *     SimpleEmail?: SimpleEmail|null,
     *     Substitutions?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
