<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchCreateUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $message
 * @property list<Shapes\User>|null $successful
 * @property list<Shapes\BatchUserErrorResponseItem>|null $failed
 */
class BatchCreateUserResponse extends Response
{
}
