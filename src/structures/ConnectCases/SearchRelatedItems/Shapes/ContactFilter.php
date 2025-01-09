<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $channel
 * @property string $contactArn
 */
class ContactFilter extends Shape
{
    /**
     * @param array{
     *     channel?: list<string>,
     *     contactArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
