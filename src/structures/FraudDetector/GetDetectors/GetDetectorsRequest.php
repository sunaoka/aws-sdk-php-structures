<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string $nextToken
 * @property int<5, 10> $maxResults
 */
class GetDetectorsRequest extends Request
{
    /**
     * @param array{
     *     detectorId?: string,
     *     nextToken?: string,
     *     maxResults?: int<5, 10>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
