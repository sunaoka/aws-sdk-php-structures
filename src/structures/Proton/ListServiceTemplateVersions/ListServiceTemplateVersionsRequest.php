<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $majorVersion
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $templateName
 */
class ListServiceTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     majorVersion?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
