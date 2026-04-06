<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchLookupUserUname;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $message
 * @property list<Shapes\BatchUnameSuccessResponseItem>|null $successful
 * @property list<Shapes\BatchUnameErrorResponseItem>|null $failed
 */
class BatchLookupUserUnameResponse extends Response
{
}
