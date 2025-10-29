<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $satelliteId
 * @property bool|null $enabled
 * @property int<1, 99999>|null $priority
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 * @property string $name
 * @property string|null $kmsKeyArn
 * @property Shapes\EphemerisData|null $ephemeris
 * @property array<string, string>|null $tags
 */
class CreateEphemerisRequest extends Request
{
    /**
     * @param array{
     *     satelliteId?: string|null,
     *     enabled?: bool|null,
     *     priority?: int<1, 99999>|null,
     *     expirationTime?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     kmsKeyArn?: string|null,
     *     ephemeris?: Shapes\EphemerisData|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
