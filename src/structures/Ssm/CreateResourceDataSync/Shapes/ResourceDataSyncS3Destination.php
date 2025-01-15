<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string|null $Prefix
 * @property 'JsonSerDe' $SyncFormat
 * @property string $Region
 * @property string|null $AWSKMSKeyARN
 * @property ResourceDataSyncDestinationDataSharing|null $DestinationDataSharing
 */
class ResourceDataSyncS3Destination extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     Prefix?: string|null,
     *     SyncFormat: 'JsonSerDe',
     *     Region: string,
     *     AWSKMSKeyARN?: string|null,
     *     DestinationDataSharing?: ResourceDataSyncDestinationDataSharing|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
