<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $BucketName
 * @property string|null $Prefix
 * @property string|null $BucketOwner
 */
class VerifiedAccessLogS3DestinationOptions extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     BucketName?: string|null,
     *     Prefix?: string|null,
     *     BucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
