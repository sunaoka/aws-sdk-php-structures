<?php

namespace Sunaoka\Aws\Structures\DSQL\GetCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $identifier
 * @property string $arn
 * @property 'CREATING'|'ACTIVE'|'IDLE'|'INACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'PENDING_SETUP'|'PENDING_DELETE' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property bool $deletionProtectionEnabled
 * @property Shapes\MultiRegionProperties|null $multiRegionProperties
 * @property array<string, string>|null $tags
 * @property Shapes\EncryptionDetails|null $encryptionDetails
 */
class GetClusterResponse extends Response
{
}
