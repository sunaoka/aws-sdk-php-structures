<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AudioGroupId
 * @property string|null $AudioRenditionSets
 * @property 'NO'|'OMIT'|'YES'|null $HlsAutoSelect
 * @property 'NO'|'OMIT'|'YES'|null $HlsDefault
 */
class MediaPackageV2DestinationSettings extends Shape
{
    /**
     * @param array{
     *     AudioGroupId?: string|null,
     *     AudioRenditionSets?: string|null,
     *     HlsAutoSelect?: 'NO'|'OMIT'|'YES'|null,
     *     HlsDefault?: 'NO'|'OMIT'|'YES'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
