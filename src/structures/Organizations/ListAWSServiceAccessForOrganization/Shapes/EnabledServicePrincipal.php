<?php

namespace Sunaoka\Aws\Structures\Organizations\ListAWSServiceAccessForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServicePrincipal
 * @property \Aws\Api\DateTimeResult $DateEnabled
 */
class EnabledServicePrincipal extends Shape
{
    /**
     * @param array{
     *     ServicePrincipal?: string,
     *     DateEnabled?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
