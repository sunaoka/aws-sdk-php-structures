<?php

namespace Sunaoka\Aws\Structures\Iot\ListManagedJobTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property int $maxResults
 * @property string $nextToken
 */
class ListManagedJobTemplatesRequest extends Request
{
    /**
     * @param array{
     *     templateName?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
