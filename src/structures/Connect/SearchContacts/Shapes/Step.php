<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Expiry|null $Expiry
 * @property Expression|null $Expression
 * @property 'ACTIVE'|'INACTIVE'|'JOINED'|'EXPIRED'|null $Status
 */
class Step extends Shape
{
    /**
     * @param array{
     *     Expiry?: Expiry|null,
     *     Expression?: Expression|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|'JOINED'|'EXPIRED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
