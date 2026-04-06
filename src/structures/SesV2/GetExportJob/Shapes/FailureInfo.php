<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FailedRecordsS3Url
 * @property string|null $ErrorMessage
 */
class FailureInfo extends Shape
{
    /**
     * @param array{
     *     FailedRecordsS3Url?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
