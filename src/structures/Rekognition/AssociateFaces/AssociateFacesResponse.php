<?php

namespace Sunaoka\Aws\Structures\Rekognition\AssociateFaces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AssociatedFace>|null $AssociatedFaces
 * @property list<Shapes\UnsuccessfulFaceAssociation>|null $UnsuccessfulFaceAssociations
 * @property 'ACTIVE'|'UPDATING'|'CREATING'|'CREATED'|null $UserStatus
 */
class AssociateFacesResponse extends Response
{
}
