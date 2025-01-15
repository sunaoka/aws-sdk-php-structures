<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $name
 */
class ListTemplatesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 100>|null,
     *     nextToken?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
