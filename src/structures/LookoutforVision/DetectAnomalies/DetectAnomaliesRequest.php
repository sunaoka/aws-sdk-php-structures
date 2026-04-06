<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DetectAnomalies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $ModelVersion
 * @property string|resource|\Psr\Http\Message\StreamInterface $Body
 * @property string $ContentType
 */
class DetectAnomaliesRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ModelVersion: string,
     *     Body: string|resource|\Psr\Http\Message\StreamInterface,
     *     ContentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
