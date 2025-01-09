<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100> $maxResults
 * @property string $nextToken
 * @property string $name
 */
class ListTemplatesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 100>,
     *     nextToken?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
