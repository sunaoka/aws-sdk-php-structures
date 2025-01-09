<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Type
 * @property 'INPROGRESS'|'SUCCESS'|'ERROR' $Status
 * @property string $StatusMessage
 * @property array<string, string> $Properties
 * @property string $ResourceType
 * @property string $ResourceId
 * @property string $ResourceArn
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class Operation extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Type?: string,
     *     Status?: 'INPROGRESS'|'SUCCESS'|'ERROR',
     *     StatusMessage?: string,
     *     Properties?: array<string, string>,
     *     ResourceType?: string,
     *     ResourceId?: string,
     *     ResourceArn?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
