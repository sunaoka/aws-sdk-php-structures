<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateProvisionedLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LimitDefinitionType $LimitDefinition
 * @property int $RequestedLimitValue
 */
class UpdateProvisionedLimitRequest extends Request
{
    /**
     * @param array{
     *     LimitDefinition: Shapes\LimitDefinitionType,
     *     RequestedLimitValue: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
