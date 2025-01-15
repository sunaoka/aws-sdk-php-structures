<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeyRotations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RotationsListEntry>|null $Rotations
 * @property string|null $NextMarker
 * @property bool|null $Truncated
 */
class ListKeyRotationsResponse extends Response
{
}
