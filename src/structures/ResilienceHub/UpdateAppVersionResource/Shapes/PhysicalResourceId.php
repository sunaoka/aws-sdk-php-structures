<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateAppVersionResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsAccountId
 * @property string|null $awsRegion
 * @property string $identifier
 * @property 'Arn'|'Native' $type
 */
class PhysicalResourceId extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     awsRegion?: string|null,
     *     identifier: string,
     *     type: 'Arn'|'Native'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
