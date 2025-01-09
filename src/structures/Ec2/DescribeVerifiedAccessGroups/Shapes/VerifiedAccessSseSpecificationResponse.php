<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CustomerManagedKeyEnabled
 * @property string $KmsKeyArn
 */
class VerifiedAccessSseSpecificationResponse extends Shape
{
    /**
     * @param array{
     *     CustomerManagedKeyEnabled?: bool,
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
