<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EnvironmentTemplateFilter> $environmentTemplates
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     environmentTemplates?: list<Shapes\EnvironmentTemplateFilter>,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
