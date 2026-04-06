<?php

namespace Sunaoka\Aws\Structures\Omics\GetSequenceStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\SseConfig|null $sseConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string|null $fallbackLocation
 * @property Shapes\SequenceStoreS3Access|null $s3Access
 * @property 'MD5up'|'SHA256up'|'SHA512up'|null $eTagAlgorithmFamily
 */
class GetSequenceStoreResponse extends Response
{
}
