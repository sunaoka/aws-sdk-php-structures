<?php

namespace Sunaoka\Aws\Structures\mgn\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApplicationAggregatedStatus $applicationAggregatedStatus
 * @property string $applicationID
 * @property string $arn
 * @property string $creationDateTime
 * @property string $description
 * @property bool $isArchived
 * @property string $lastModifiedDateTime
 * @property string $name
 * @property array<string, string> $tags
 * @property string $waveID
 */
class Application extends Shape
{
    /**
     * @param array{
     *     applicationAggregatedStatus?: ApplicationAggregatedStatus,
     *     applicationID?: string,
     *     arn?: string,
     *     creationDateTime?: string,
     *     description?: string,
     *     isArchived?: bool,
     *     lastModifiedDateTime?: string,
     *     name?: string,
     *     tags?: array<string, string>,
     *     waveID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
