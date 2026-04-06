<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListBusinessReportSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property string|null $BucketName
 */
class BusinessReportS3Location extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     BucketName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
