<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateSequenceStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property Shapes\SseConfig $sseConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property list<string> $propagatedSetLevelTags
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $status
 * @property string $statusMessage
 * @property string $fallbackLocation
 * @property Shapes\SequenceStoreS3Access $s3Access
 * @property 'MD5up'|'SHA256up'|'SHA512up' $eTagAlgorithmFamily
 */
class UpdateSequenceStoreResponse extends Response
{
}
