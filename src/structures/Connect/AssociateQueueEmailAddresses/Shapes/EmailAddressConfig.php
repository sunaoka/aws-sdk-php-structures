<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateQueueEmailAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmailAddressId
 */
class EmailAddressConfig extends Shape
{
    /**
     * @param array{EmailAddressId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
