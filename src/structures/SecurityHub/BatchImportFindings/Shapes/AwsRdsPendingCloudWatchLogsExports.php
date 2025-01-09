<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $LogTypesToEnable
 * @property list<string> $LogTypesToDisable
 */
class AwsRdsPendingCloudWatchLogsExports extends Shape
{
    /**
     * @param array{
     *     LogTypesToEnable?: list<string>,
     *     LogTypesToDisable?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
