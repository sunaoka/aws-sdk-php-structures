<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateVpcCidrBlock\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|'failing'|'failed' $State
 * @property string $StatusMessage
 */
class VpcCidrBlockState extends Shape
{
    /**
     * @param array{
     *     State?: 'associating'|'associated'|'disassociating'|'disassociated'|'failing'|'failed',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
