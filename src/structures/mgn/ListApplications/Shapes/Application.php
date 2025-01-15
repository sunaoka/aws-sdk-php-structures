<?php

namespace Sunaoka\Aws\Structures\mgn\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApplicationAggregatedStatus|null $applicationAggregatedStatus
 * @property string|null $applicationID
 * @property string|null $arn
 * @property string|null $creationDateTime
 * @property string|null $description
 * @property bool|null $isArchived
 * @property string|null $lastModifiedDateTime
 * @property string|null $name
 * @property array<string, string>|null $tags
 * @property string|null $waveID
 */
class Application extends Shape
{
    /**
     * @param array{
     *     applicationAggregatedStatus?: ApplicationAggregatedStatus|null,
     *     applicationID?: string|null,
     *     arn?: string|null,
     *     creationDateTime?: string|null,
     *     description?: string|null,
     *     isArchived?: bool|null,
     *     lastModifiedDateTime?: string|null,
     *     name?: string|null,
     *     tags?: array<string, string>|null,
     *     waveID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
