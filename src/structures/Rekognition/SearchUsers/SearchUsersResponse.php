<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\UserMatch>|null $UserMatches
 * @property string|null $FaceModelVersion
 * @property Shapes\SearchedFace|null $SearchedFace
 * @property Shapes\SearchedUser|null $SearchedUser
 */
class SearchUsersResponse extends Response
{
}
