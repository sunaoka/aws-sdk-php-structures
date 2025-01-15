<?php

namespace Sunaoka\Aws\Structures\Iot\GetPolicyVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $policyArn
 * @property string|null $policyName
 * @property string|null $policyDocument
 * @property string|null $policyVersionId
 * @property bool|null $isDefaultVersion
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property string|null $generationId
 */
class GetPolicyVersionResponse extends Response
{
}
