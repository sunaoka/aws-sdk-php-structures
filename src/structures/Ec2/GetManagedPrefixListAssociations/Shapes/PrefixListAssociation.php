<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedPrefixListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property string $ResourceOwner
 */
class PrefixListAssociation extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string,
     *     ResourceOwner?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
