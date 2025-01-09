<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLaunchConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LaunchConfigurationNames
 * @property string $NextToken
 * @property int $MaxRecords
 */
class DescribeLaunchConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     LaunchConfigurationNames?: list<string>,
     *     NextToken?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
