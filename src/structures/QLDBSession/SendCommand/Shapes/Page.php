<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ValueHolder>|null $Values
 * @property string|null $NextPageToken
 */
class Page extends Shape
{
    /**
     * @param array{
     *     Values?: list<ValueHolder>|null,
     *     NextPageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
