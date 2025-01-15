<?php

namespace Sunaoka\Aws\Structures\Iot\ListManagedJobTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $templateName
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListManagedJobTemplatesRequest extends Request
{
    /**
     * @param array{
     *     templateName?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
