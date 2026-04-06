<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceUrl
 * @property ServiceNowServiceAuthorizationConfig|null $authorizationConfig
 */
class ServiceNowServiceDetails extends Shape
{
    /**
     * @param array{
     *     instanceUrl: string,
     *     authorizationConfig?: ServiceNowServiceAuthorizationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
