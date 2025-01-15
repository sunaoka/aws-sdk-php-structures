<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetExternalModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $modelEndpoint
 * @property string|null $nextToken
 * @property int<5, 10>|null $maxResults
 */
class GetExternalModelsRequest extends Request
{
    /**
     * @param array{
     *     modelEndpoint?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<5, 10>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
