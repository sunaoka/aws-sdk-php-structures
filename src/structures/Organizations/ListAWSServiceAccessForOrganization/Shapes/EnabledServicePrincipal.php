<?php

namespace Sunaoka\Aws\Structures\Organizations\ListAWSServiceAccessForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServicePrincipal
 * @property \Aws\Api\DateTimeResult|null $DateEnabled
 */
class EnabledServicePrincipal extends Shape
{
    /**
     * @param array{
     *     ServicePrincipal?: string|null,
     *     DateEnabled?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
