<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeCustomPlugin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $customPluginArn
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|null $customPluginState
 * @property string|null $description
 * @property Shapes\CustomPluginRevisionSummary|null $latestRevision
 * @property string|null $name
 * @property Shapes\StateDescription|null $stateDescription
 */
class DescribeCustomPluginResponse extends Response
{
}
