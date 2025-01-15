<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateSecurityControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityControlId
 * @property array<string, Shapes\ParameterConfiguration> $Parameters
 * @property string|null $LastUpdateReason
 */
class UpdateSecurityControlRequest extends Request
{
    /**
     * @param array{
     *     SecurityControlId: string,
     *     Parameters: array<string, Shapes\ParameterConfiguration>,
     *     LastUpdateReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
