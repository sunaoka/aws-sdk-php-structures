<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateProvisionedLimit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_CATEGORY' $LimitClass
 * @property array<string, string> $Attributes
 */
class LimitDefinitionType extends Shape
{
    /**
     * @param array{
     *     LimitClass: 'API_CATEGORY',
     *     Attributes: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
