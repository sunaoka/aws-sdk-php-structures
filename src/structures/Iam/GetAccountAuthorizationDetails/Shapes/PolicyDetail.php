<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyName
 * @property string|null $PolicyDocument
 */
class PolicyDetail extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string|null,
     *     PolicyDocument?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
