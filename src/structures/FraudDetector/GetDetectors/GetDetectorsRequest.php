<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $detectorId
 * @property string|null $nextToken
 * @property int<5, 10>|null $maxResults
 */
class GetDetectorsRequest extends Request
{
    /**
     * @param array{
     *     detectorId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<5, 10>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
