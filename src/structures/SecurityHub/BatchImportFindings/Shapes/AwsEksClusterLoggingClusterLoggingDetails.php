<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property list<string> $Types
 */
class AwsEksClusterLoggingClusterLoggingDetails extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     Types?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
