<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDisk;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskName
 * @property string $availabilityZone
 * @property int $sizeInGb
 * @property list<Shapes\Tag>|null $tags
 * @property list<Shapes\AddOnRequest>|null $addOns
 */
class CreateDiskRequest extends Request
{
    /**
     * @param array{
     *     diskName: string,
     *     availabilityZone: string,
     *     sizeInGb: int,
     *     tags?: list<Shapes\Tag>|null,
     *     addOns?: list<Shapes\AddOnRequest>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
