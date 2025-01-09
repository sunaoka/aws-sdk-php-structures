<?php

namespace Sunaoka\Aws\Structures\Rekognition\DisassociateFaces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DisassociatedFace> $DisassociatedFaces
 * @property list<Shapes\UnsuccessfulFaceDisassociation> $UnsuccessfulFaceDisassociations
 * @property 'ACTIVE'|'UPDATING'|'CREATING'|'CREATED' $UserStatus
 */
class DisassociateFacesResponse extends Response
{
}
