<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VolumeId
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING'|'AVAILABLE'|null $Lifecycle
 * @property Shapes\DeleteVolumeOntapResponse|null $OntapResponse
 */
class DeleteVolumeResponse extends Response
{
}
