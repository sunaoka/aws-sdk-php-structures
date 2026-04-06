<?php

namespace Sunaoka\Aws\Structures\Iam\GetSAMLProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SAMLMetadataDocument
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property \Aws\Api\DateTimeResult|null $ValidUntil
 * @property list<Shapes\Tag>|null $Tags
 */
class GetSAMLProviderResponse extends Response
{
}
