<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorModelName
 * @property string|null $keyValue
 */
class DescribeDetectorRequest extends Request
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     keyValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
