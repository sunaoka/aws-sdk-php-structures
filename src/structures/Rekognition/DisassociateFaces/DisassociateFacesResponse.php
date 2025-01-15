<?php

namespace Sunaoka\Aws\Structures\Rekognition\DisassociateFaces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DisassociatedFace>|null $DisassociatedFaces
 * @property list<Shapes\UnsuccessfulFaceDisassociation>|null $UnsuccessfulFaceDisassociations
 * @property 'ACTIVE'|'UPDATING'|'CREATING'|'CREATED'|null $UserStatus
 */
class DisassociateFacesResponse extends Response
{
}
