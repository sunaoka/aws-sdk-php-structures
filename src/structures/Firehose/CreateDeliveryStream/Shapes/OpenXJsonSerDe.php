<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ConvertDotsInJsonKeysToUnderscores
 * @property bool|null $CaseInsensitive
 * @property array<string, string>|null $ColumnToJsonKeyMappings
 */
class OpenXJsonSerDe extends Shape
{
    /**
     * @param array{
     *     ConvertDotsInJsonKeysToUnderscores?: bool|null,
     *     CaseInsensitive?: bool|null,
     *     ColumnToJsonKeyMappings?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
