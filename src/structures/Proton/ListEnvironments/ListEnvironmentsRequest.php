<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EnvironmentTemplateFilter>|null $environmentTemplates
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     environmentTemplates?: list<Shapes\EnvironmentTemplateFilter>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
