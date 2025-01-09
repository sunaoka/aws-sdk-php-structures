<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGlueTableCredentials;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AccessKeyId
 * @property string $SecretAccessKey
 * @property string $SessionToken
 * @property \Aws\Api\DateTimeResult $Expiration
 * @property list<string> $VendedS3Path
 */
class GetTemporaryGlueTableCredentialsResponse extends Response
{
}
