<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Type
 * @property 'INPROGRESS'|'SUCCESS'|'ERROR'|null $Status
 * @property string|null $StatusMessage
 * @property array<string, string>|null $Properties
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 * @property string|null $ResourceArn
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class Operation extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: string|null,
     *     Status?: 'INPROGRESS'|'SUCCESS'|'ERROR'|null,
     *     StatusMessage?: string|null,
     *     Properties?: array<string, string>|null,
     *     ResourceType?: string|null,
     *     ResourceId?: string|null,
     *     ResourceArn?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
