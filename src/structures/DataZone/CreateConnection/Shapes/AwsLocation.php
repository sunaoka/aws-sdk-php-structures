<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessRole
 * @property string $awsAccountId
 * @property string $awsRegion
 * @property string $iamConnectionId
 */
class AwsLocation extends Shape
{
    /**
     * @param array{
     *     accessRole?: string,
     *     awsAccountId?: string,
     *     awsRegion?: string,
     *     iamConnectionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
