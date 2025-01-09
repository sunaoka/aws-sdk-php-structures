<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VolumeId
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING'|'AVAILABLE' $Lifecycle
 * @property Shapes\DeleteVolumeOntapResponse $OntapResponse
 */
class DeleteVolumeResponse extends Response
{
}
