<?php

namespace Sunaoka\Aws\Structures\DSQL\UpdateCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $identifier
 * @property string $arn
 * @property 'CREATING'|'ACTIVE'|'IDLE'|'INACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'PENDING_SETUP'|'PENDING_DELETE' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string|null $witnessRegion
 * @property list<string>|null $linkedClusterArns
 * @property bool $deletionProtectionEnabled
 */
class UpdateClusterResponse extends Response
{
}
