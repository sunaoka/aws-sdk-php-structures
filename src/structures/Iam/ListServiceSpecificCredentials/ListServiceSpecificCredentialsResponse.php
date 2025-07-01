<?php

namespace Sunaoka\Aws\Structures\Iam\ListServiceSpecificCredentials;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ServiceSpecificCredentialMetadata>|null $ServiceSpecificCredentials
 * @property string|null $Marker
 * @property bool|null $IsTruncated
 */
class ListServiceSpecificCredentialsResponse extends Response
{
}
