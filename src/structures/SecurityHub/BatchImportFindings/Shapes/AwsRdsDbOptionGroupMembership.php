<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OptionGroupName
 * @property string $Status
 */
class AwsRdsDbOptionGroupMembership extends Shape
{
    /**
     * @param array{
     *     OptionGroupName?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
