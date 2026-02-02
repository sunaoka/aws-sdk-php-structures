<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchDeleteUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $message
 * @property list<Shapes\BatchUserSuccessResponseItem>|null $successful
 * @property list<Shapes\BatchUserErrorResponseItem>|null $failed
 */
class BatchDeleteUserResponse extends Response
{
}
