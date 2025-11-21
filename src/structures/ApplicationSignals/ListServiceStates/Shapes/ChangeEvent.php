<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceStates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string $AccountId
 * @property string $Region
 * @property array<string, string> $Entity
 * @property 'DEPLOYMENT'|'CONFIGURATION' $ChangeEventType
 * @property string $EventId
 * @property string|null $UserName
 * @property string|null $EventName
 */
class ChangeEvent extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     AccountId: string,
     *     Region: string,
     *     Entity: array<string, string>,
     *     ChangeEventType: 'DEPLOYMENT'|'CONFIGURATION',
     *     EventId: string,
     *     UserName?: string|null,
     *     EventName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
