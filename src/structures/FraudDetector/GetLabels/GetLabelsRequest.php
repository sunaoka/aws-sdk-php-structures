<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $nextToken
 * @property int $maxResults
 */
class GetLabelsRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
