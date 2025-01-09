<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Name
 * @property string $Bucket
 * @property Shapes\VpcConfiguration $VpcConfiguration
 * @property Shapes\PublicAccessBlockConfiguration $PublicAccessBlockConfiguration
 * @property string $BucketAccountId
 */
class CreateAccessPointRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Name: string,
     *     Bucket: string,
     *     VpcConfiguration?: Shapes\VpcConfiguration,
     *     PublicAccessBlockConfiguration?: Shapes\PublicAccessBlockConfiguration,
     *     BucketAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
