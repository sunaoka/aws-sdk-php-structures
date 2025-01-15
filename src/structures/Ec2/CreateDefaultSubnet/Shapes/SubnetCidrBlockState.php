<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDefaultSubnet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|'failing'|'failed'|null $State
 * @property string|null $StatusMessage
 */
class SubnetCidrBlockState extends Shape
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
