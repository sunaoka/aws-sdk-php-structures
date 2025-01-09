<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateStreamProcessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StreamProcessorInput $Input
 * @property Shapes\StreamProcessorOutput $Output
 * @property string $Name
 * @property Shapes\StreamProcessorSettings $Settings
 * @property string $RoleArn
 * @property array<string, string> $Tags
 * @property Shapes\StreamProcessorNotificationChannel $NotificationChannel
 * @property string $KmsKeyId
 * @property list<Shapes\RegionOfInterest> $RegionsOfInterest
 * @property Shapes\StreamProcessorDataSharingPreference $DataSharingPreference
 */
class CreateStreamProcessorRequest extends Request
{
    /**
     * @param array{
     *     Input: Shapes\StreamProcessorInput,
     *     Output: Shapes\StreamProcessorOutput,
     *     Name: string,
     *     Settings: Shapes\StreamProcessorSettings,
     *     RoleArn: string,
     *     Tags?: array<string, string>,
     *     NotificationChannel?: Shapes\StreamProcessorNotificationChannel,
     *     KmsKeyId?: string,
     *     RegionsOfInterest?: list<Shapes\RegionOfInterest>,
     *     DataSharingPreference?: Shapes\StreamProcessorDataSharingPreference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
