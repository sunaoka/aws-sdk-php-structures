<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $testConfigurationIds
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTestConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     testConfigurationIds?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
