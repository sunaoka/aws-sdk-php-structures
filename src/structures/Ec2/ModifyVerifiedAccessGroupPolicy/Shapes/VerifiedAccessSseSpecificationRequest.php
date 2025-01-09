<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessGroupPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CustomerManagedKeyEnabled
 * @property string $KmsKeyArn
 */
class VerifiedAccessSseSpecificationRequest extends Shape
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
