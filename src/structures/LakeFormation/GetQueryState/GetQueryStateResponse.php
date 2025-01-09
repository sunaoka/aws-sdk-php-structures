<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetQueryState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Error
 * @property 'PENDING'|'WORKUNITS_AVAILABLE'|'ERROR'|'FINISHED'|'EXPIRED' $State
 */
class GetQueryStateResponse extends Response
{
}
