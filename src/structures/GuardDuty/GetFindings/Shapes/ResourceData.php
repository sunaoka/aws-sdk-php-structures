<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Bucket|null $S3Bucket
 * @property Ec2Instance|null $Ec2Instance
 * @property AccessKey|null $AccessKey
 * @property Ec2NetworkInterface|null $Ec2NetworkInterface
 * @property S3Object|null $S3Object
 */
class ResourceData extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: S3Bucket|null,
     *     Ec2Instance?: Ec2Instance|null,
     *     AccessKey?: AccessKey|null,
     *     Ec2NetworkInterface?: Ec2NetworkInterface|null,
     *     S3Object?: S3Object|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
