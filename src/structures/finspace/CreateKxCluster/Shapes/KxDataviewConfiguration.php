<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataviewName
 * @property string $dataviewVersionId
 * @property string $changesetId
 * @property list<KxDataviewSegmentConfiguration> $segmentConfigurations
 */
class KxDataviewConfiguration extends Shape
{
    /**
     * @param array{
     *     dataviewName?: string,
     *     dataviewVersionId?: string,
     *     changesetId?: string,
     *     segmentConfigurations?: list<KxDataviewSegmentConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
