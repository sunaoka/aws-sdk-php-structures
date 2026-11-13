<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSONATA' $Runtime
 * @property array<string, string>|null $Output
 * @property list<'EXT-X-DATERANGE'> $TagFilter
 * @property string|null $RunCondition
 */
class HlsTagProcessorConfiguration extends Shape
{
    /**
     * @param array{
     *     Runtime: 'JSONATA',
     *     Output?: array<string, string>|null,
     *     TagFilter: list<'EXT-X-DATERANGE'>,
     *     RunCondition?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
