<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $imageId
 * @property list<string>|null $ipV4Addresses
 * @property list<string>|null $ipV6Addresses
 * @property string|null $keyName
 * @property string|null $iamInstanceProfileArn
 * @property string|null $vpcId
 * @property string|null $subnetId
 * @property \Aws\Api\DateTimeResult|null $launchedAt
 * @property string|null $platform
 */
class AwsEc2InstanceDetails extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     imageId?: string|null,
     *     ipV4Addresses?: list<string>|null,
     *     ipV6Addresses?: list<string>|null,
     *     keyName?: string|null,
     *     iamInstanceProfileArn?: string|null,
     *     vpcId?: string|null,
     *     subnetId?: string|null,
     *     launchedAt?: \Aws\Api\DateTimeResult|null,
     *     platform?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
