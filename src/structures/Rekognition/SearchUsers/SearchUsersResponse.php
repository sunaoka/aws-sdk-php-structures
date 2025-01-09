<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\UserMatch> $UserMatches
 * @property string $FaceModelVersion
 * @property Shapes\SearchedFace $SearchedFace
 * @property Shapes\SearchedUser $SearchedUser
 */
class SearchUsersResponse extends Response
{
}
