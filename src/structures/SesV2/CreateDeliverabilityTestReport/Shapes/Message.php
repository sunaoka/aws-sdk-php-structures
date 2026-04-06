<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Content $Subject
 * @property Body $Body
 * @property list<MessageHeader>|null $Headers
 */
class Message extends Shape
{
    /**
     * @param array{
     *     Subject: Content,
     *     Body: Body,
     *     Headers?: list<MessageHeader>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
