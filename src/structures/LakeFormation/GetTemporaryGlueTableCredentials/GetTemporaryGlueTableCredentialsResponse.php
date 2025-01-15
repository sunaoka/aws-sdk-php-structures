<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGlueTableCredentials;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AccessKeyId
 * @property string|null $SecretAccessKey
 * @property string|null $SessionToken
 * @property \Aws\Api\DateTimeResult|null $Expiration
 * @property list<string>|null $VendedS3Path
 */
class GetTemporaryGlueTableCredentialsResponse extends Response
{
}
