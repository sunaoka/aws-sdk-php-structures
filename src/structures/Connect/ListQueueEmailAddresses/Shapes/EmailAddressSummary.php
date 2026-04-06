<?php

namespace Sunaoka\Aws\Structures\Connect\ListQueueEmailAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property bool|null $IsDefaultOutboundEmail
 */
class EmailAddressSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     IsDefaultOutboundEmail?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
