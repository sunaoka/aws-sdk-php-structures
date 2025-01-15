<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListImportFailures\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Location
 * @property 'FAILED'|'RETRY'|'SUCCEEDED'|null $Status
 * @property string|null $ErrorType
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class ImportFailureListItem extends Shape
{
    /**
     * @param array{
     *     Location?: string|null,
     *     Status?: 'FAILED'|'RETRY'|'SUCCEEDED'|null,
     *     ErrorType?: string|null,
     *     ErrorMessage?: string|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
