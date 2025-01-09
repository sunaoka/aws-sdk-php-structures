<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeCustomPlugin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $customPluginArn
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING' $customPluginState
 * @property string $description
 * @property Shapes\CustomPluginRevisionSummary $latestRevision
 * @property string $name
 * @property Shapes\StateDescription $stateDescription
 */
class DescribeCustomPluginResponse extends Response
{
}
