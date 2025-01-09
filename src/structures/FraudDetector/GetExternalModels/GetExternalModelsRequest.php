<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetExternalModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelEndpoint
 * @property string $nextToken
 * @property int<5, 10> $maxResults
 */
class GetExternalModelsRequest extends Request
{
    /**
     * @param array{
     *     modelEndpoint?: string,
     *     nextToken?: string,
     *     maxResults?: int<5, 10>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
