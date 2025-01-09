<?php

namespace Sunaoka\Aws\Structures\IVS\CreatePlaybackRestrictionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $allowedCountries
 * @property list<string> $allowedOrigins
 * @property bool $enableStrictOriginEnforcement
 * @property string $name
 * @property array<string, string> $tags
 */
class CreatePlaybackRestrictionPolicyRequest extends Request
{
    /**
     * @param array{
     *     allowedCountries?: list<string>,
     *     allowedOrigins?: list<string>,
     *     enableStrictOriginEnforcement?: bool,
     *     name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
