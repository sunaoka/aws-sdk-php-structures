<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $StreamProcessorArn
 * @property 'STOPPED'|'STARTING'|'RUNNING'|'FAILED'|'STOPPING'|'UPDATING' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdateTimestamp
 * @property Shapes\StreamProcessorInput $Input
 * @property Shapes\StreamProcessorOutput $Output
 * @property string $RoleArn
 * @property Shapes\StreamProcessorSettings $Settings
 * @property Shapes\StreamProcessorNotificationChannel $NotificationChannel
 * @property string $KmsKeyId
 * @property list<Shapes\RegionOfInterest> $RegionsOfInterest
 * @property Shapes\StreamProcessorDataSharingPreference $DataSharingPreference
 */
class DescribeStreamProcessorResponse extends Response
{
}
