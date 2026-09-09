<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AudioGroupId
 * @property string|null $AudioRenditionSets
 * @property 'NO'|'OMIT'|'YES'|null $HlsAutoSelect
 * @property 'NO'|'OMIT'|'YES'|null $HlsDefault
 * @property list<'MULTIVIEW_EQUAL_SIZE_VIEW'|'MULTIVIEW_PRIMARY_VIEW'|'MULTIVIEW_SECONDARY_VIEW'>|null $OutputUsage
 */
class MediaPackageV2DestinationSettings extends Shape
{
    /**
     * @param array{
     *     AudioGroupId?: string|null,
     *     AudioRenditionSets?: string|null,
     *     HlsAutoSelect?: 'NO'|'OMIT'|'YES'|null,
     *     HlsDefault?: 'NO'|'OMIT'|'YES'|null,
     *     OutputUsage?: list<'MULTIVIEW_EQUAL_SIZE_VIEW'|'MULTIVIEW_PRIMARY_VIEW'|'MULTIVIEW_SECONDARY_VIEW'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
