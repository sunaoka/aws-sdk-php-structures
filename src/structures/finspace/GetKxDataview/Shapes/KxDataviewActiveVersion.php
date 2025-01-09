<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxDataview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $changesetId
 * @property list<KxDataviewSegmentConfiguration> $segmentConfigurations
 * @property list<string> $attachedClusters
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property string $versionId
 */
class KxDataviewActiveVersion extends Shape
{
    /**
     * @param array{
     *     changesetId?: string,
     *     segmentConfigurations?: list<KxDataviewSegmentConfiguration>,
     *     attachedClusters?: list<string>,
     *     createdTimestamp?: \Aws\Api\DateTimeResult,
     *     versionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
