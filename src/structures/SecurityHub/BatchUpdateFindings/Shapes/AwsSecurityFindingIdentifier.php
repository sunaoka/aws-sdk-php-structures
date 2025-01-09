<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ProductArn
 */
class AwsSecurityFindingIdentifier extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ProductArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
