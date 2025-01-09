<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeLaunchConfigurationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $launchConfigurationTemplateIDs
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class DescribeLaunchConfigurationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     launchConfigurationTemplateIDs?: list<string>,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
