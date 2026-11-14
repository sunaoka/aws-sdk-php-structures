<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateRuntimeVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $ResolvedUri
 * @property 'CREATING'|'ACTIVE'|'FAILED'|'DELETING'|'PENDING_DELETION' $State
 * @property string|null $ReleaseNotes
 * @property list<Shapes\Platform>|null $Platforms
 * @property Shapes\Compatibility|null $Compatibility
 * @property string $Created
 * @property string $LastModified
 */
class UpdateRuntimeVersionResponse extends Response
{
}
