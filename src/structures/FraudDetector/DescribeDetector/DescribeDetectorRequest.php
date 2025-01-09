<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string $nextToken
 * @property int<1000, 2500> $maxResults
 */
class DescribeDetectorRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     nextToken?: string,
     *     maxResults?: int<1000, 2500>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
