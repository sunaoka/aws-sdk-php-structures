<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Name
 * @property string $Bucket
 * @property Shapes\VpcConfiguration|null $VpcConfiguration
 * @property Shapes\PublicAccessBlockConfiguration|null $PublicAccessBlockConfiguration
 * @property string|null $BucketAccountId
 */
class CreateAccessPointRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Name: string,
     *     Bucket: string,
     *     VpcConfiguration?: Shapes\VpcConfiguration|null,
     *     PublicAccessBlockConfiguration?: Shapes\PublicAccessBlockConfiguration|null,
     *     BucketAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
