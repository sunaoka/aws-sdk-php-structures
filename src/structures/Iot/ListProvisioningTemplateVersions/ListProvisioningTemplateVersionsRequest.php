<?php

namespace Sunaoka\Aws\Structures\Iot\ListProvisioningTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property int<1, 250> $maxResults
 * @property string $nextToken
 */
class ListProvisioningTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     maxResults?: int<1, 250>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
