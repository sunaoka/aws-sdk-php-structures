<?php

namespace Sunaoka\Aws\Structures\mgn\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $applicationID
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property bool|null $isArchived
 * @property ApplicationAggregatedStatus|null $applicationAggregatedStatus
 * @property string|null $creationDateTime
 * @property string|null $lastModifiedDateTime
 * @property array<string, string>|null $tags
 * @property string|null $waveID
 */
class Application extends Shape
{
    /**
     * @param array{
     *     applicationID?: string|null,
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     isArchived?: bool|null,
     *     applicationAggregatedStatus?: ApplicationAggregatedStatus|null,
     *     creationDateTime?: string|null,
     *     lastModifiedDateTime?: string|null,
     *     tags?: array<string, string>|null,
     *     waveID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
