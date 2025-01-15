<?php

namespace Sunaoka\Aws\Structures\Iam\ListSSHPublicKeys;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SSHPublicKeyMetadata>|null $SSHPublicKeys
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 */
class ListSSHPublicKeysResponse extends Response
{
}
