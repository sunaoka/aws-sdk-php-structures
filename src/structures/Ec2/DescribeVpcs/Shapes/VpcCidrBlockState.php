<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|'failing'|'failed'|null $State
 * @property string|null $StatusMessage
 */
class VpcCidrBlockState extends Shape
{
    /**
     * @param array{
     *     State?: 'associating'|'associated'|'disassociating'|'disassociated'|'failing'|'failed'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
