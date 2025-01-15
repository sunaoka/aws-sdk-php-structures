<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetListsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $nextToken
 * @property int<5, 50>|null $maxResults
 */
class GetListsMetadataRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<5, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
