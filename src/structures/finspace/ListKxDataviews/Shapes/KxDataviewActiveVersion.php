<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxDataviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $changesetId
 * @property list<KxDataviewSegmentConfiguration>|null $segmentConfigurations
 * @property list<string>|null $attachedClusters
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property string|null $versionId
 */
class KxDataviewActiveVersion extends Shape
{
    /**
     * @param array{
     *     changesetId?: string|null,
     *     segmentConfigurations?: list<KxDataviewSegmentConfiguration>|null,
     *     attachedClusters?: list<string>|null,
     *     createdTimestamp?: \Aws\Api\DateTimeResult|null,
     *     versionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
