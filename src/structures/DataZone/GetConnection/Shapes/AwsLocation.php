<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessRole
 * @property string|null $awsAccountId
 * @property string|null $awsRegion
 * @property string|null $iamConnectionId
 */
class AwsLocation extends Shape
{
    /**
     * @param array{
     *     accessRole?: string|null,
     *     awsAccountId?: string|null,
     *     awsRegion?: string|null,
     *     iamConnectionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
