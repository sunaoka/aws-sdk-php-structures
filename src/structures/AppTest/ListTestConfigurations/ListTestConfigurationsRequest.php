<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $testConfigurationIds
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListTestConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     testConfigurationIds?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
