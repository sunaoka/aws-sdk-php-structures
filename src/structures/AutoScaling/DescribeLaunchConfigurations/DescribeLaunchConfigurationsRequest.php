<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLaunchConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $LaunchConfigurationNames
 * @property string|null $NextToken
 * @property int|null $MaxRecords
 */
class DescribeLaunchConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     LaunchConfigurationNames?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
