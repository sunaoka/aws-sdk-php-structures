<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $enabled
 * @property Shapes\EphemerisData $ephemeris
 * @property \Aws\Api\DateTimeResult $expirationTime
 * @property string $kmsKeyArn
 * @property string $name
 * @property int<1, 99999> $priority
 * @property string $satelliteId
 * @property array<string, string> $tags
 */
class CreateEphemerisRequest extends Request
{
    /**
     * @param array{
     *     enabled?: bool,
     *     ephemeris?: Shapes\EphemerisData,
     *     expirationTime?: \Aws\Api\DateTimeResult,
     *     kmsKeyArn?: string,
     *     name: string,
     *     priority?: int<1, 99999>,
     *     satelliteId: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
