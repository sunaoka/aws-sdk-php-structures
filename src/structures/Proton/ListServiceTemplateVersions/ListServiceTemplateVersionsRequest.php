<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $majorVersion
 * @property int $maxResults
 * @property string $nextToken
 * @property string $templateName
 */
class ListServiceTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     majorVersion?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
