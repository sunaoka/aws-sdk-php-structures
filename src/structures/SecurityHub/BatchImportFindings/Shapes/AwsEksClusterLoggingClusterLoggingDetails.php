<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property list<string>|null $Types
 */
class AwsEksClusterLoggingClusterLoggingDetails extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     Types?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
