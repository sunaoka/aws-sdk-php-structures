<?php

namespace Sunaoka\Aws\Structures\Ec2\GetEbsEncryptionByDefault;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $EbsEncryptionByDefault
 * @property 'sse-ebs'|'sse-kms'|'none' $SseType
 */
class GetEbsEncryptionByDefaultResponse extends Response
{
}
