<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $iamInstanceProfileArn
 * @property string|null $imageId
 * @property list<string>|null $ipV4Addresses
 * @property list<string>|null $ipV6Addresses
 * @property string|null $keyName
 * @property \Aws\Api\DateTimeResult|null $launchedAt
 * @property string|null $platform
 * @property string|null $subnetId
 * @property string|null $type
 * @property string|null $vpcId
 */
class AwsEc2InstanceDetails extends Shape
{
    /**
     * @param array{
     *     iamInstanceProfileArn?: string|null,
     *     imageId?: string|null,
     *     ipV4Addresses?: list<string>|null,
     *     ipV6Addresses?: list<string>|null,
     *     keyName?: string|null,
     *     launchedAt?: \Aws\Api\DateTimeResult|null,
     *     platform?: string|null,
     *     subnetId?: string|null,
     *     type?: string|null,
     *     vpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
