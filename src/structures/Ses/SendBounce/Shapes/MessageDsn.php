<?php

namespace Sunaoka\Aws\Structures\Ses\SendBounce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReportingMta
 * @property \Aws\Api\DateTimeResult|null $ArrivalDate
 * @property list<ExtensionField>|null $ExtensionFields
 */
class MessageDsn extends Shape
{
    /**
     * @param array{
     *     ReportingMta: string,
     *     ArrivalDate?: \Aws\Api\DateTimeResult|null,
     *     ExtensionFields?: list<ExtensionField>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
