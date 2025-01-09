<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListUnsupportedAppVersionResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property string $awsRegion
 * @property string $identifier
 * @property 'Arn'|'Native' $type
 */
class PhysicalResourceId extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     awsRegion?: string,
     *     identifier: string,
     *     type: 'Arn'|'Native'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
