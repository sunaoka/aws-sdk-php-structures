<?php

namespace Sunaoka\Aws\Structures\IVS\CreateFailoverSlateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property int<3, 5>|null $activationThresholdSeconds
 * @property int<3, 10>|null $minSlateDisplaySeconds
 * @property int<60, 180>|null $maxSlateDisplaySeconds
 * @property array<string, string>|null $tags
 */
class CreateFailoverSlateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     activationThresholdSeconds?: int<3, 5>|null,
     *     minSlateDisplaySeconds?: int<3, 10>|null,
     *     maxSlateDisplaySeconds?: int<60, 180>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
