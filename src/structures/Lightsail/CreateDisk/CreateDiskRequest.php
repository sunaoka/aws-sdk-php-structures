<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDisk;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskName
 * @property string $availabilityZone
 * @property int $sizeInGb
 * @property list<Shapes\Tag> $tags
 * @property list<Shapes\AddOnRequest> $addOns
 */
class CreateDiskRequest extends Request
{
    /**
     * @param array{
     *     diskName: string,
     *     availabilityZone: string,
     *     sizeInGb: int,
     *     tags?: list<Shapes\Tag>,
     *     addOns?: list<Shapes\AddOnRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
