<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceDetection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 */
class GetFaceDetectionRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxResults?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
