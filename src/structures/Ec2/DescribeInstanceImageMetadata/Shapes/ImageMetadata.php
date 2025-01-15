<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceImageMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImageId
 * @property string|null $Name
 * @property string|null $OwnerId
 * @property 'pending'|'available'|'invalid'|'deregistered'|'transient'|'failed'|'error'|'disabled'|null $State
 * @property string|null $ImageOwnerAlias
 * @property string|null $CreationDate
 * @property string|null $DeprecationTime
 * @property bool|null $ImageAllowed
 * @property bool|null $IsPublic
 */
class ImageMetadata extends Shape
{
    /**
     * @param array{
     *     ImageId?: string|null,
     *     Name?: string|null,
     *     OwnerId?: string|null,
     *     State?: 'pending'|'available'|'invalid'|'deregistered'|'transient'|'failed'|'error'|'disabled'|null,
     *     ImageOwnerAlias?: string|null,
     *     CreationDate?: string|null,
     *     DeprecationTime?: string|null,
     *     ImageAllowed?: bool|null,
     *     IsPublic?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
