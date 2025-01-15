<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MsSmoothAdditionalManifest>|null $AdditionalManifests
 * @property 'COMBINE_DUPLICATE_STREAMS'|'NONE'|null $AudioDeduplication
 * @property string|null $Destination
 * @property DestinationSettings|null $DestinationSettings
 * @property MsSmoothEncryptionSettings|null $Encryption
 * @property int<1, 2147483647>|null $FragmentLength
 * @property 'EXACT'|'GOP_MULTIPLE'|null $FragmentLengthControl
 * @property 'UTF8'|'UTF16'|null $ManifestEncoding
 */
class MsSmoothGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdditionalManifests?: list<MsSmoothAdditionalManifest>|null,
     *     AudioDeduplication?: 'COMBINE_DUPLICATE_STREAMS'|'NONE'|null,
     *     Destination?: string|null,
     *     DestinationSettings?: DestinationSettings|null,
     *     Encryption?: MsSmoothEncryptionSettings|null,
     *     FragmentLength?: int<1, 2147483647>|null,
     *     FragmentLengthControl?: 'EXACT'|'GOP_MULTIPLE'|null,
     *     ManifestEncoding?: 'UTF8'|'UTF16'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
