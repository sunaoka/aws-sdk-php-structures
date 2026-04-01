<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $scopes
 * @property PagerDutyAuthorizationConfig $authorizationConfig
 */
class PagerDutyDetails extends Shape
{
    /**
     * @param array{
     *     scopes: list<string>,
     *     authorizationConfig: PagerDutyAuthorizationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
