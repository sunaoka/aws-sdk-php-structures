<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateStreamProcessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StreamProcessorInput $Input
 * @property Shapes\StreamProcessorOutput $Output
 * @property string $Name
 * @property Shapes\StreamProcessorSettings $Settings
 * @property string $RoleArn
 * @property array<string, string>|null $Tags
 * @property Shapes\StreamProcessorNotificationChannel|null $NotificationChannel
 * @property string|null $KmsKeyId
 * @property list<Shapes\RegionOfInterest>|null $RegionsOfInterest
 * @property Shapes\StreamProcessorDataSharingPreference|null $DataSharingPreference
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
     *     Tags?: array<string, string>|null,
     *     NotificationChannel?: Shapes\StreamProcessorNotificationChannel|null,
     *     KmsKeyId?: string|null,
     *     RegionsOfInterest?: list<Shapes\RegionOfInterest>|null,
     *     DataSharingPreference?: Shapes\StreamProcessorDataSharingPreference|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
