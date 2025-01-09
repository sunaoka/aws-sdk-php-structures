<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsersByImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\UserMatch> $UserMatches
 * @property string $FaceModelVersion
 * @property Shapes\SearchedFaceDetails $SearchedFace
 * @property list<Shapes\UnsearchedFace> $UnsearchedFaces
 */
class SearchUsersByImageResponse extends Response
{
}
