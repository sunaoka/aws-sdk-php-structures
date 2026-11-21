<?php

namespace Sunaoka\Aws\Structures\Textract\GetBlueprint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BlueprintArn
 * @property string $BlueprintName
 * @property string|null $BlueprintVersion
 * @property string $Schema
 * @property string|null $KmsKeyId
 * @property array<string, string>|null $KmsEncryptionContext
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class GetBlueprintResponse extends Response
{
}
