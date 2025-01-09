<?php

namespace Sunaoka\Aws\Structures\Rekognition\AssociateFaces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AssociatedFace> $AssociatedFaces
 * @property list<Shapes\UnsuccessfulFaceAssociation> $UnsuccessfulFaceAssociations
 * @property 'ACTIVE'|'UPDATING'|'CREATING'|'CREATED' $UserStatus
 */
class AssociateFacesResponse extends Response
{
}
