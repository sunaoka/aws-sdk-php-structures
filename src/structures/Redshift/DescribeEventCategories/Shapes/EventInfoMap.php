<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEventCategories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventId
 * @property list<string> $EventCategories
 * @property string $EventDescription
 * @property string $Severity
 */
class EventInfoMap extends Shape
{
    /**
     * @param array{
     *     EventId?: string,
     *     EventCategories?: list<string>,
     *     EventDescription?: string,
     *     Severity?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
