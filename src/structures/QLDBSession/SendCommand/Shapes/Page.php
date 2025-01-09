<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ValueHolder> $Values
 * @property string $NextPageToken
 */
class Page extends Shape
{
    /**
     * @param array{
     *     Values?: list<ValueHolder>,
     *     NextPageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
