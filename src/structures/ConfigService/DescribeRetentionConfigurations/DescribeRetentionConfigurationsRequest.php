<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRetentionConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $RetentionConfigurationNames
 * @property string $NextToken
 */
class DescribeRetentionConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     RetentionConfigurationNames?: list<string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
