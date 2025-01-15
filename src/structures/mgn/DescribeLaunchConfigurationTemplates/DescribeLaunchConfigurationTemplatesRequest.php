<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeLaunchConfigurationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $launchConfigurationTemplateIDs
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeLaunchConfigurationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     launchConfigurationTemplateIDs?: list<string>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
