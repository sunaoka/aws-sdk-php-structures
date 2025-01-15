<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsersByImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\UserMatch>|null $UserMatches
 * @property string|null $FaceModelVersion
 * @property Shapes\SearchedFaceDetails|null $SearchedFace
 * @property list<Shapes\UnsearchedFace>|null $UnsearchedFaces
 */
class SearchUsersByImageResponse extends Response
{
}
