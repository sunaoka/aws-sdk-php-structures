<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ConvertDotsInJsonKeysToUnderscores
 * @property bool $CaseInsensitive
 * @property array<string, string> $ColumnToJsonKeyMappings
 */
class OpenXJsonSerDe extends Shape
{
    /**
     * @param array{
     *     ConvertDotsInJsonKeysToUnderscores?: bool,
     *     CaseInsensitive?: bool,
     *     ColumnToJsonKeyMappings?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
