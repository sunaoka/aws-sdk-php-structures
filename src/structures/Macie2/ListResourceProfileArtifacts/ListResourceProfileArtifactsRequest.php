<?php

namespace Sunaoka\Aws\Structures\Macie2\ListResourceProfileArtifacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property string $resourceArn
 */
class ListResourceProfileArtifactsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
