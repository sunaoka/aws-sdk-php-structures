<?php

namespace Sunaoka\Aws\Structures\Iam\GetSAMLProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SAMLProviderUUID
 * @property string|null $SAMLMetadataDocument
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property \Aws\Api\DateTimeResult|null $ValidUntil
 * @property list<Shapes\Tag>|null $Tags
 * @property 'Required'|'Allowed'|null $AssertionEncryptionMode
 * @property list<Shapes\SAMLPrivateKey>|null $PrivateKeyList
 */
class GetSAMLProviderResponse extends Response
{
}
