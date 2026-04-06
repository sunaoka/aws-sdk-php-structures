<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateEphemeris;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $enabled
 * @property string $ephemerisId
 * @property string|null $name
 * @property int<0, 99999>|null $priority
 */
class UpdateEphemerisRequest extends Request
{
    /**
     * @param array{
     *     enabled: bool,
     *     ephemerisId: string,
     *     name?: string|null,
     *     priority?: int<0, 99999>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
