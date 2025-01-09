<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCopyJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobArn
 * @property 'InProgress'|'Completed'|'Failed' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $targetModelArn
 * @property string $targetModelName
 * @property string $sourceAccountId
 * @property string $sourceModelArn
 * @property string $targetModelKmsKeyArn
 * @property list<Shapes\Tag> $targetModelTags
 * @property string $failureMessage
 * @property string $sourceModelName
 */
class GetModelCopyJobResponse extends Response
{
}
