<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateEphemeris;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $enabled
 * @property string $ephemerisId
 * @property string $name
 * @property int $priority
 */
class UpdateEphemerisRequest extends Request
{
    /**
     * @param array{
     *     enabled: bool,
     *     ephemerisId: string,
     *     name?: string,
     *     priority?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
