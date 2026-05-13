<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $clusterIdentifier
 * @property string $streamIdentifier
 * @property string $arn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'|'IMPAIRED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'UNORDERED' $ordering
 * @property 'JSON' $format
 */
class CreateStreamResponse extends Response
{
}
