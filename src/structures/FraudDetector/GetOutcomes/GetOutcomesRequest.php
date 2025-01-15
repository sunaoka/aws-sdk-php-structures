<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetOutcomes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $nextToken
 * @property int<50, 100>|null $maxResults
 */
class GetOutcomesRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<50, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
