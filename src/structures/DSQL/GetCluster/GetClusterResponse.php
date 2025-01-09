<?php

namespace Sunaoka\Aws\Structures\DSQL\GetCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $identifier
 * @property string $arn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property bool $deletionProtectionEnabled
 * @property string $witnessRegion
 * @property list<string> $linkedClusterArns
 */
class GetClusterResponse extends Response
{
}
