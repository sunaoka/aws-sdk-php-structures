<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeOperatingSystems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Id
 * @property string|null $Type
 * @property list<OperatingSystemConfigurationManager>|null $ConfigurationManagers
 * @property string|null $ReportedName
 * @property string|null $ReportedVersion
 * @property bool|null $Supported
 */
class OperatingSystem extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Id?: string|null,
     *     Type?: string|null,
     *     ConfigurationManagers?: list<OperatingSystemConfigurationManager>|null,
     *     ReportedName?: string|null,
     *     ReportedVersion?: string|null,
     *     Supported?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
