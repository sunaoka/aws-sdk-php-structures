<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateEphemeris;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $enabled
 * @property string $ephemerisId
 * @property string $name
 * @property int<0, 99999> $priority
 */
class UpdateEphemerisRequest extends Request
{
    /**
     * @param array{
     *     enabled: bool,
     *     ephemerisId: string,
     *     name?: string,
     *     priority?: int<0, 99999>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
