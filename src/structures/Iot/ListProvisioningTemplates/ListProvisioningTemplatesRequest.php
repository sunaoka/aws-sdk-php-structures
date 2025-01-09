<?php

namespace Sunaoka\Aws\Structures\Iot\ListProvisioningTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250> $maxResults
 * @property string $nextToken
 */
class ListProvisioningTemplatesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 250>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
