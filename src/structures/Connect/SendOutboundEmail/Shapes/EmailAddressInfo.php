<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmailAddress
 * @property string|null $DisplayName
 */
class EmailAddressInfo extends Shape
{
    /**
     * @param array{
     *     EmailAddress: string,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
