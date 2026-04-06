<?php

namespace Sunaoka\Aws\Structures\Omics\CreateSequenceStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\SseConfig|null $sseConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string|null $fallbackLocation
 * @property 'MD5up'|'SHA256up'|'SHA512up'|null $eTagAlgorithmFamily
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|null $status
 * @property string|null $statusMessage
 * @property list<string>|null $propagatedSetLevelTags
 * @property Shapes\SequenceStoreS3Access|null $s3Access
 */
class CreateSequenceStoreResponse extends Response
{
}
