<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $identifier
 * @property string $arn
 * @property 'CREATING'|'ACTIVE'|'IDLE'|'INACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'PENDING_SETUP'|'PENDING_DELETE' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\MultiRegionProperties|null $multiRegionProperties
 * @property Shapes\EncryptionDetails|null $encryptionDetails
 * @property bool $deletionProtectionEnabled
 * @property string|null $endpoint
 */
class CreateClusterResponse extends Response
{
}
