<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $Prefix
 * @property 'JsonSerDe' $SyncFormat
 * @property string $Region
 * @property string $AWSKMSKeyARN
 * @property ResourceDataSyncDestinationDataSharing $DestinationDataSharing
 */
class ResourceDataSyncS3Destination extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     Prefix?: string,
     *     SyncFormat: 'JsonSerDe',
     *     Region: string,
     *     AWSKMSKeyARN?: string,
     *     DestinationDataSharing?: ResourceDataSyncDestinationDataSharing
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
