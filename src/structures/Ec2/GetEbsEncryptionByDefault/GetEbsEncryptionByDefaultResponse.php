<?php

namespace Sunaoka\Aws\Structures\Ec2\GetEbsEncryptionByDefault;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $EbsEncryptionByDefault
 * @property 'sse-ebs'|'sse-kms'|'none'|null $SseType
 */
class GetEbsEncryptionByDefaultResponse extends Response
{
}
