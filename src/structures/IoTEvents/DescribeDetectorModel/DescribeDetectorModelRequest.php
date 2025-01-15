<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorModelName
 * @property string|null $detectorModelVersion
 */
class DescribeDetectorModelRequest extends Request
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     detectorModelVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
