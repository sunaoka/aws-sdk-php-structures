<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedPrefixListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property string|null $ResourceOwner
 */
class PrefixListAssociation extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     ResourceOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
