<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $iamInstanceProfileArn
 * @property string $imageId
 * @property list<string> $ipV4Addresses
 * @property list<string> $ipV6Addresses
 * @property string $keyName
 * @property \Aws\Api\DateTimeResult $launchedAt
 * @property string $platform
 * @property string $subnetId
 * @property string $type
 * @property string $vpcId
 */
class AwsEc2InstanceDetails extends Shape
{
    /**
     * @param array{
     *     iamInstanceProfileArn?: string,
     *     imageId?: string,
     *     ipV4Addresses?: list<string>,
     *     ipV6Addresses?: list<string>,
     *     keyName?: string,
     *     launchedAt?: \Aws\Api\DateTimeResult,
     *     platform?: string,
     *     subnetId?: string,
     *     type?: string,
     *     vpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
