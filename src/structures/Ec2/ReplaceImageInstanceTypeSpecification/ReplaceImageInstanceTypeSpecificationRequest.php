<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceImageInstanceTypeSpecification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property Shapes\InstanceTypeSpecificationRequest|null $InstanceTypeSpecification
 * @property bool|null $DryRun
 */
class ReplaceImageInstanceTypeSpecificationRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     InstanceTypeSpecification?: Shapes\InstanceTypeSpecificationRequest|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
