<?php

namespace Sunaoka\Aws\Structures\BackupStorage\PutObject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InlineChunkChecksum
 * @property 'SHA256' $InlineChunkChecksumAlgorithm
 * @property string $ObjectChecksum
 * @property 'SUMMARY' $ObjectChecksumAlgorithm
 */
class PutObjectResponse extends Response
{
}
