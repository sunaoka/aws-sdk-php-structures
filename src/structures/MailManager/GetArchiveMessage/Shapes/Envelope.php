<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $From
 * @property string $Helo
 * @property list<string> $To
 */
class Envelope extends Shape
{
    /**
     * @param array{
     *     From?: string,
     *     Helo?: string,
     *     To?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
