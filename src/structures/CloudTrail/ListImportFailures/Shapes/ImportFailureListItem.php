<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListImportFailures\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Location
 * @property 'FAILED'|'RETRY'|'SUCCEEDED' $Status
 * @property string $ErrorType
 * @property string $ErrorMessage
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class ImportFailureListItem extends Shape
{
    /**
     * @param array{
     *     Location?: string,
     *     Status?: 'FAILED'|'RETRY'|'SUCCEEDED',
     *     ErrorType?: string,
     *     ErrorMessage?: string,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
