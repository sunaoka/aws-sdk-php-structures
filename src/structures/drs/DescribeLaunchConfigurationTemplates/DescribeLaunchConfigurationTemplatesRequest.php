<?php

namespace Sunaoka\Aws\Structures\drs\DescribeLaunchConfigurationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $launchConfigurationTemplateIDs
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeLaunchConfigurationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     launchConfigurationTemplateIDs?: list<string>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
