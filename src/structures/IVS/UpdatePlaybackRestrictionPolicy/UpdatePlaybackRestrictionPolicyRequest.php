<?php

namespace Sunaoka\Aws\Structures\IVS\UpdatePlaybackRestrictionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $allowedCountries
 * @property list<string>|null $allowedOrigins
 * @property string $arn
 * @property bool|null $enableStrictOriginEnforcement
 * @property string|null $name
 */
class UpdatePlaybackRestrictionPolicyRequest extends Request
{
    /**
     * @param array{
     *     allowedCountries?: list<string>|null,
     *     allowedOrigins?: list<string>|null,
     *     arn: string,
     *     enableStrictOriginEnforcement?: bool|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
