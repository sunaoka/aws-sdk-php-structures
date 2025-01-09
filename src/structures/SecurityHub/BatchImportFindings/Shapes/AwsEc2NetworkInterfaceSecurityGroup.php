<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property string $GroupId
 */
class AwsEc2NetworkInterfaceSecurityGroup extends Shape
{
    /**
     * @param array{
     *     GroupName?: string,
     *     GroupId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
