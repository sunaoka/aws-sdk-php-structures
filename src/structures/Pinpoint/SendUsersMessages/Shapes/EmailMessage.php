<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property string $FeedbackForwardingAddress
 * @property string $FromAddress
 * @property RawEmail $RawEmail
 * @property list<string> $ReplyToAddresses
 * @property SimpleEmail $SimpleEmail
 * @property array<string, list<string>> $Substitutions
 */
class EmailMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string,
     *     FeedbackForwardingAddress?: string,
     *     FromAddress?: string,
     *     RawEmail?: RawEmail,
     *     ReplyToAddresses?: list<string>,
     *     SimpleEmail?: SimpleEmail,
     *     Substitutions?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
