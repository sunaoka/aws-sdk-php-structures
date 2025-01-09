<?php

namespace Sunaoka\Aws\Structures\Rekognition\UpdateStreamProcessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\StreamProcessorSettingsForUpdate $SettingsForUpdate
 * @property list<Shapes\RegionOfInterest> $RegionsOfInterestForUpdate
 * @property Shapes\StreamProcessorDataSharingPreference $DataSharingPreferenceForUpdate
 * @property list<'ConnectedHomeMinConfidence'|'RegionsOfInterest'> $ParametersToDelete
 */
class UpdateStreamProcessorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     SettingsForUpdate?: Shapes\StreamProcessorSettingsForUpdate,
     *     RegionsOfInterestForUpdate?: list<Shapes\RegionOfInterest>,
     *     DataSharingPreferenceForUpdate?: Shapes\StreamProcessorDataSharingPreference,
     *     ParametersToDelete?: list<'ConnectedHomeMinConfidence'|'RegionsOfInterest'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
