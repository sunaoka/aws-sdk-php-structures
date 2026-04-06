<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataviewName
 * @property string|null $dataviewVersionId
 * @property string|null $changesetId
 * @property list<KxDataviewSegmentConfiguration>|null $segmentConfigurations
 */
class KxDataviewConfiguration extends Shape
{
    /**
     * @param array{
     *     dataviewName?: string|null,
     *     dataviewVersionId?: string|null,
     *     changesetId?: string|null,
     *     segmentConfigurations?: list<KxDataviewSegmentConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
