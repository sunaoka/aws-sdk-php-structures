<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateContactChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SimpleAddress
 */
class ContactChannelAddress extends Shape
{
    /**
     * @param array{SimpleAddress?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
