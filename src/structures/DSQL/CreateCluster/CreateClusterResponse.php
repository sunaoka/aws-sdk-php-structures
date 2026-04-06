<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $identifier
 * @property string $arn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property bool $deletionProtectionEnabled
 */
class CreateClusterResponse extends Response
{
}
