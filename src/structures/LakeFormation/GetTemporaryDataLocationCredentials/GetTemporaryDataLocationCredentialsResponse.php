<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryDataLocationCredentials;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\TemporaryCredentials|null $Credentials
 * @property list<string>|null $AccessibleDataLocations
 * @property 'READ'|'READWRITE'|null $CredentialsScope
 */
class GetTemporaryDataLocationCredentialsResponse extends Response
{
}
