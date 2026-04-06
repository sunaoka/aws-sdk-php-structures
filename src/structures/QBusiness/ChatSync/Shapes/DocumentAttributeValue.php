<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stringValue
 * @property list<string>|null $stringListValue
 * @property int|null $longValue
 * @property \Aws\Api\DateTimeResult|null $dateValue
 */
class DocumentAttributeValue extends Shape
{
    /**
     * @param array{
     *     stringValue?: string|null,
     *     stringListValue?: list<string>|null,
     *     longValue?: int|null,
     *     dateValue?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
