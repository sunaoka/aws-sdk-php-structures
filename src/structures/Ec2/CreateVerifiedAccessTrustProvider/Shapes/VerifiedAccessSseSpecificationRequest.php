<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessTrustProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CustomerManagedKeyEnabled
 * @property string|null $KmsKeyArn
 */
class VerifiedAccessSseSpecificationRequest extends Shape
{
    /**
     * @param array{
     *     CustomerManagedKeyEnabled?: bool|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
