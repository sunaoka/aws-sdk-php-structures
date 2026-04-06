<?php

namespace Sunaoka\Aws\Structures\IVS\ListPlaybackRestrictionPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property list<string> $allowedCountries
 * @property list<string> $allowedOrigins
 * @property bool|null $enableStrictOriginEnforcement
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class PlaybackRestrictionPolicySummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     allowedCountries: list<string>,
     *     allowedOrigins: list<string>,
     *     enableStrictOriginEnforcement?: bool|null,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
