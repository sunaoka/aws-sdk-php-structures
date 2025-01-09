<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorModelName
 * @property string $detectorModelVersion
 */
class DescribeDetectorModelRequest extends Request
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     detectorModelVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
