<?php

namespace Sunaoka\Aws\Structures\IVS\UpdateFailoverSlateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property int<3, 5>|null $activationThresholdSeconds
 * @property int<3, 10>|null $minSlateDisplaySeconds
 * @property int<60, 180>|null $maxSlateDisplaySeconds
 */
class UpdateFailoverSlateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     activationThresholdSeconds?: int<3, 5>|null,
     *     minSlateDisplaySeconds?: int<3, 10>|null,
     *     maxSlateDisplaySeconds?: int<60, 180>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
