<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListTemplateSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListTemplateSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     templateIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
