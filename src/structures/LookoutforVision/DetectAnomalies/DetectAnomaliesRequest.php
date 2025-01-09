<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DetectAnomalies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $ModelVersion
 * @property string $Body
 * @property string $ContentType
 */
class DetectAnomaliesRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ModelVersion: string,
     *     Body: string,
     *     ContentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
