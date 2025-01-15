<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $majorVersion
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $templateName
 */
class ListServiceTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     majorVersion?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
