<?php

namespace Sunaoka\Aws\Structures\Iot\ListSbomValidationResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string $versionName
 * @property 'FAILED'|'SUCCEEDED' $validationResult
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListSbomValidationResultsRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     versionName: string,
     *     validationResult?: 'FAILED'|'SUCCEEDED',
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
