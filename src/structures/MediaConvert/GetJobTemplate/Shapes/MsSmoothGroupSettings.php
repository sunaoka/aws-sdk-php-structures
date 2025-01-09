<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MsSmoothAdditionalManifest> $AdditionalManifests
 * @property 'COMBINE_DUPLICATE_STREAMS'|'NONE' $AudioDeduplication
 * @property string $Destination
 * @property DestinationSettings $DestinationSettings
 * @property MsSmoothEncryptionSettings $Encryption
 * @property int<1, 2147483647> $FragmentLength
 * @property 'EXACT'|'GOP_MULTIPLE' $FragmentLengthControl
 * @property 'UTF8'|'UTF16' $ManifestEncoding
 */
class MsSmoothGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdditionalManifests?: list<MsSmoothAdditionalManifest>,
     *     AudioDeduplication?: 'COMBINE_DUPLICATE_STREAMS'|'NONE',
     *     Destination?: string,
     *     DestinationSettings?: DestinationSettings,
     *     Encryption?: MsSmoothEncryptionSettings,
     *     FragmentLength?: int<1, 2147483647>,
     *     FragmentLengthControl?: 'EXACT'|'GOP_MULTIPLE',
     *     ManifestEncoding?: 'UTF8'|'UTF16'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
