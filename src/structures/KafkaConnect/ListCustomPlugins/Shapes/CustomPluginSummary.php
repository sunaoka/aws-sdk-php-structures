<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListCustomPlugins\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $customPluginArn
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|null $customPluginState
 * @property string|null $description
 * @property CustomPluginRevisionSummary|null $latestRevision
 * @property string|null $name
 */
class CustomPluginSummary extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     customPluginArn?: string|null,
     *     customPluginState?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|null,
     *     description?: string|null,
     *     latestRevision?: CustomPluginRevisionSummary|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
