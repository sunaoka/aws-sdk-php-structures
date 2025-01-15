<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string|null $nextToken
 * @property int<1000, 2500>|null $maxResults
 */
class DescribeDetectorRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1000, 2500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
