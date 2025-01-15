<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEventCategories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventId
 * @property list<string>|null $EventCategories
 * @property string|null $EventDescription
 * @property string|null $Severity
 */
class EventInfoMap extends Shape
{
    /**
     * @param array{
     *     EventId?: string|null,
     *     EventCategories?: list<string>|null,
     *     EventDescription?: string|null,
     *     Severity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
