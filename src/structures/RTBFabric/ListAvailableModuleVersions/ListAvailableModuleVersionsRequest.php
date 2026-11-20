<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListAvailableModuleVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $moduleId
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DEPRECATED'|null $status
 * @property int<1, 10>|null $maxResults
 * @property string|null $nextToken
 */
class ListAvailableModuleVersionsRequest extends Request
{
    /**
     * @param array{
     *     moduleId: string,
     *     status?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DEPRECATED'|null,
     *     maxResults?: int<1, 10>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
