<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetSegmentDetectionRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
