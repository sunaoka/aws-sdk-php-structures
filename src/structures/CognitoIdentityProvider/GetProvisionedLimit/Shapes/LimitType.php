<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetProvisionedLimit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LimitDefinitionType $LimitDefinition
 * @property int $ProvisionedLimitValue
 * @property int $FreeLimitValue
 */
class LimitType extends Shape
{
    /**
     * @param array{
     *     LimitDefinition: LimitDefinitionType,
     *     ProvisionedLimitValue: int,
     *     FreeLimitValue: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
