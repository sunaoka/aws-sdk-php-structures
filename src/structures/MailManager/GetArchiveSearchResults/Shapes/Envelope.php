<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearchResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $From
 * @property string|null $Helo
 * @property list<string>|null $To
 */
class Envelope extends Shape
{
    /**
     * @param array{
     *     From?: string|null,
     *     Helo?: string|null,
     *     To?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
