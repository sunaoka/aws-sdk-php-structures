<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetProvisionedLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LimitDefinitionType $LimitDefinition
 */
class GetProvisionedLimitRequest extends Request
{
    /**
     * @param array{LimitDefinition: Shapes\LimitDefinitionType} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
