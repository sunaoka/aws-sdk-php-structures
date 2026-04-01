<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountUrn
 * @property DynatraceServiceAuthorizationConfig|null $authorizationConfig
 */
class DynatraceServiceDetails extends Shape
{
    /**
     * @param array{
     *     accountUrn: string,
     *     authorizationConfig?: DynatraceServiceAuthorizationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
