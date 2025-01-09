<?php

namespace Sunaoka\Aws\Structures\Ses\SendBounce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReportingMta
 * @property \Aws\Api\DateTimeResult $ArrivalDate
 * @property list<ExtensionField> $ExtensionFields
 */
class MessageDsn extends Shape
{
    /**
     * @param array{
     *     ReportingMta: string,
     *     ArrivalDate?: \Aws\Api\DateTimeResult,
     *     ExtensionFields?: list<ExtensionField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
