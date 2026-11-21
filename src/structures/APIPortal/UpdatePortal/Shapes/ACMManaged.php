<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainName
 * @property string $certificateArn
 */
class ACMManaged extends Shape
{
    /**
     * @param array{
     *     domainName: string,
     *     certificateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
