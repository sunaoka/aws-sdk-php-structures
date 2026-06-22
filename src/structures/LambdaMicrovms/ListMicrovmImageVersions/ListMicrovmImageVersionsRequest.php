<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovmImageVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property string $imageIdentifier
 */
class ListMicrovmImageVersionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     imageIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
