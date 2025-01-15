<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCopyJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobArn
 * @property 'InProgress'|'Completed'|'Failed' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $targetModelArn
 * @property string|null $targetModelName
 * @property string $sourceAccountId
 * @property string $sourceModelArn
 * @property string|null $targetModelKmsKeyArn
 * @property list<Shapes\Tag>|null $targetModelTags
 * @property string|null $failureMessage
 * @property string|null $sourceModelName
 */
class GetModelCopyJobResponse extends Response
{
}
