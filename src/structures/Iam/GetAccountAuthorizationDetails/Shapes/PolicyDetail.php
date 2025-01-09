<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property string $PolicyDocument
 */
class PolicyDetail extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string,
     *     PolicyDocument?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
