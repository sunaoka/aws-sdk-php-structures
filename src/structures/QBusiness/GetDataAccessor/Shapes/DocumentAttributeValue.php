<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataAccessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stringValue
 * @property list<string> $stringListValue
 * @property int $longValue
 * @property \Aws\Api\DateTimeResult $dateValue
 */
class DocumentAttributeValue extends Shape
{
    /**
     * @param array{
     *     stringValue?: string,
     *     stringListValue?: list<string>,
     *     longValue?: int,
     *     dateValue?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
