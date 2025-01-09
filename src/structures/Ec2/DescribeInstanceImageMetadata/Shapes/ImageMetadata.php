<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceImageMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageId
 * @property string $Name
 * @property string $OwnerId
 * @property 'pending'|'available'|'invalid'|'deregistered'|'transient'|'failed'|'error'|'disabled' $State
 * @property string $ImageOwnerAlias
 * @property string $CreationDate
 * @property string $DeprecationTime
 * @property bool $ImageAllowed
 * @property bool $IsPublic
 */
class ImageMetadata extends Shape
{
    /**
     * @param array{
     *     ImageId?: string,
     *     Name?: string,
     *     OwnerId?: string,
     *     State?: 'pending'|'available'|'invalid'|'deregistered'|'transient'|'failed'|'error'|'disabled',
     *     ImageOwnerAlias?: string,
     *     CreationDate?: string,
     *     DeprecationTime?: string,
     *     ImageAllowed?: bool,
     *     IsPublic?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
