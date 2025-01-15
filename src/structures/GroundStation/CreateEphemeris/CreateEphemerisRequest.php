<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $enabled
 * @property Shapes\EphemerisData|null $ephemeris
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 * @property string|null $kmsKeyArn
 * @property string $name
 * @property int<1, 99999>|null $priority
 * @property string $satelliteId
 * @property array<string, string>|null $tags
 */
class CreateEphemerisRequest extends Request
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     ephemeris?: Shapes\EphemerisData|null,
     *     expirationTime?: \Aws\Api\DateTimeResult|null,
     *     kmsKeyArn?: string|null,
     *     name: string,
     *     priority?: int<1, 99999>|null,
     *     satelliteId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
