<?php

namespace Sunaoka\Aws\Structures\FSx\DetachAndDeleteS3AccessPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED'|'MISCONFIGURED'|null $Lifecycle
 * @property string|null $Name
 */
class DetachAndDeleteS3AccessPointResponse extends Response
{
}
