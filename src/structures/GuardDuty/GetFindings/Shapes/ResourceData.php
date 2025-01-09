<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Bucket $S3Bucket
 * @property Ec2Instance $Ec2Instance
 * @property AccessKey $AccessKey
 * @property Ec2NetworkInterface $Ec2NetworkInterface
 * @property S3Object $S3Object
 */
class ResourceData extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: S3Bucket,
     *     Ec2Instance?: Ec2Instance,
     *     AccessKey?: AccessKey,
     *     Ec2NetworkInterface?: Ec2NetworkInterface,
     *     S3Object?: S3Object
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
