<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $nextToken
 * @property int<10, 50>|null $maxResults
 */
class GetLabelsRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<10, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
