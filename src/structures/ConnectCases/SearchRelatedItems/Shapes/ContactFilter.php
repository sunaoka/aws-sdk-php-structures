<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $channel
 * @property string|null $contactArn
 */
class ContactFilter extends Shape
{
    /**
     * @param array{
     *     channel?: list<string>|null,
     *     contactArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
