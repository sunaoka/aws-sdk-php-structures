<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListContactChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SimpleAddress
 */
class ContactChannelAddress extends Shape
{
    /**
     * @param array{SimpleAddress?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
