<?php

namespace Sunaoka\Aws\Structures\DSQL\GetStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $clusterIdentifier
 * @property string $streamIdentifier
 * @property string $arn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'|'IMPAIRED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'UNORDERED' $ordering
 * @property 'JSON' $format
 * @property Shapes\TargetDefinition|null $targetDefinition
 * @property Shapes\StatusReason|null $statusReason
 * @property array<string, string>|null $tags
 */
class GetStreamResponse extends Response
{
}
