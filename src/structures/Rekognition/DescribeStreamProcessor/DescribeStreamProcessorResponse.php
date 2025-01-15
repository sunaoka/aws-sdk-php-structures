<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $StreamProcessorArn
 * @property 'STOPPED'|'STARTING'|'RUNNING'|'FAILED'|'STOPPING'|'UPDATING'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTimestamp
 * @property Shapes\StreamProcessorInput|null $Input
 * @property Shapes\StreamProcessorOutput|null $Output
 * @property string|null $RoleArn
 * @property Shapes\StreamProcessorSettings|null $Settings
 * @property Shapes\StreamProcessorNotificationChannel|null $NotificationChannel
 * @property string|null $KmsKeyId
 * @property list<Shapes\RegionOfInterest>|null $RegionsOfInterest
 * @property Shapes\StreamProcessorDataSharingPreference|null $DataSharingPreference
 */
class DescribeStreamProcessorResponse extends Response
{
}
