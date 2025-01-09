<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeOperatingSystems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string $Type
 * @property list<OperatingSystemConfigurationManager> $ConfigurationManagers
 * @property string $ReportedName
 * @property string $ReportedVersion
 * @property bool $Supported
 */
class OperatingSystem extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Id?: string,
     *     Type?: string,
     *     ConfigurationManagers?: list<OperatingSystemConfigurationManager>,
     *     ReportedName?: string,
     *     ReportedVersion?: string,
     *     Supported?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
