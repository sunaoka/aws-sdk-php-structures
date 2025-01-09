<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $nextToken
 * @property int<10, 50> $maxResults
 */
class GetLabelsRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     nextToken?: string,
     *     maxResults?: int<10, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
