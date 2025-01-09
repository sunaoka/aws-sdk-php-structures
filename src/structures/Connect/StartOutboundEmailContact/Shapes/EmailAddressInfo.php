<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundEmailContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmailAddress
 * @property string $DisplayName
 */
class EmailAddressInfo extends Shape
{
    /**
     * @param array{
     *     EmailAddress: string,
     *     DisplayName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
