<?php

namespace Sunaoka\Aws\Structures\Ses\SendEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ToAddresses
 * @property list<string>|null $CcAddresses
 * @property list<string>|null $BccAddresses
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     ToAddresses?: list<string>|null,
     *     CcAddresses?: list<string>|null,
     *     BccAddresses?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
