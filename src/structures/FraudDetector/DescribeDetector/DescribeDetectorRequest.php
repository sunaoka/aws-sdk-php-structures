<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string $nextToken
 * @property int $maxResults
 */
class DescribeDetectorRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
