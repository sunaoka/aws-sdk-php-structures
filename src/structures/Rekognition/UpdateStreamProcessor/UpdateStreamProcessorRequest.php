<?php

namespace Sunaoka\Aws\Structures\Rekognition\UpdateStreamProcessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\StreamProcessorSettingsForUpdate|null $SettingsForUpdate
 * @property list<Shapes\RegionOfInterest>|null $RegionsOfInterestForUpdate
 * @property Shapes\StreamProcessorDataSharingPreference|null $DataSharingPreferenceForUpdate
 * @property list<'ConnectedHomeMinConfidence'|'RegionsOfInterest'>|null $ParametersToDelete
 */
class UpdateStreamProcessorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     SettingsForUpdate?: Shapes\StreamProcessorSettingsForUpdate|null,
     *     RegionsOfInterestForUpdate?: list<Shapes\RegionOfInterest>|null,
     *     DataSharingPreferenceForUpdate?: Shapes\StreamProcessorDataSharingPreference|null,
     *     ParametersToDelete?: list<'ConnectedHomeMinConfidence'|'RegionsOfInterest'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
