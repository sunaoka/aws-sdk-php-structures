<?php

namespace Sunaoka\Aws\Structures\DSQL\DeleteStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $clusterIdentifier
 * @property string $streamIdentifier
 * @property string $arn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'|'IMPAIRED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class DeleteStreamResponse extends Response
{
}
