<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListCommandExecutionsForSandbox;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sandboxId
 * @property int<1, 100>|null $maxResults
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 */
class ListCommandExecutionsForSandboxRequest extends Request
{
    /**
     * @param array{
     *     sandboxId: string,
     *     maxResults?: int<1, 100>|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
