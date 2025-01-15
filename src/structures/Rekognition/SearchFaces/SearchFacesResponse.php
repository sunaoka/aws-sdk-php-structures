<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFaces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SearchedFaceId
 * @property list<Shapes\FaceMatch>|null $FaceMatches
 * @property string|null $FaceModelVersion
 */
class SearchFacesResponse extends Response
{
}
