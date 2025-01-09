<?php

namespace Sunaoka\Aws\Structures\Iam\ListSSHPublicKeys;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SSHPublicKeyMetadata> $SSHPublicKeys
 * @property bool $IsTruncated
 * @property string $Marker
 */
class ListSSHPublicKeysResponse extends Response
{
}
