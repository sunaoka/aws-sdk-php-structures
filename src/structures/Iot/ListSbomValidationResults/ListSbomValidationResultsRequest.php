<?php

namespace Sunaoka\Aws\Structures\Iot\ListSbomValidationResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string $versionName
 * @property 'FAILED'|'SUCCEEDED'|null $validationResult
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListSbomValidationResultsRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     versionName: string,
     *     validationResult?: 'FAILED'|'SUCCEEDED'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
