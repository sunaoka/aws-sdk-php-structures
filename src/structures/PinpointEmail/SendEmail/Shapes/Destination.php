<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\SendEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ToAddresses
 * @property list<string> $CcAddresses
 * @property list<string> $BccAddresses
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     ToAddresses?: list<string>,
     *     CcAddresses?: list<string>,
     *     BccAddresses?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
