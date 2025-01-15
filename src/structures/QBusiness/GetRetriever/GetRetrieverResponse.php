<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetRetriever;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $applicationId
 * @property string|null $retrieverId
 * @property string|null $retrieverArn
 * @property 'NATIVE_INDEX'|'KENDRA_INDEX'|null $type
 * @property 'CREATING'|'ACTIVE'|'FAILED'|null $status
 * @property string|null $displayName
 * @property Shapes\RetrieverConfiguration|null $configuration
 * @property string|null $roleArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetRetrieverResponse extends Response
{
}
