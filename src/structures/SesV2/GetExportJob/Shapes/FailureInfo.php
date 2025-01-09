<?php

namespace Sunaoka\Aws\Structures\SesV2\GetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FailedRecordsS3Url
 * @property string $ErrorMessage
 */
class FailureInfo extends Shape
{
    /**
     * @param array{
     *     FailedRecordsS3Url?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
