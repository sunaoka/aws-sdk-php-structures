<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeyRotations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RotationsListEntry> $Rotations
 * @property string $NextMarker
 * @property bool $Truncated
 */
class ListKeyRotationsResponse extends Response
{
}
