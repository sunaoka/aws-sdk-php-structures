<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRetentionConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $RetentionConfigurationNames
 * @property string|null $NextToken
 */
class DescribeRetentionConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     RetentionConfigurationNames?: list<string>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
