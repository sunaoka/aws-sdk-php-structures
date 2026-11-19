<?php

namespace Sunaoka\Aws\Structures\Signin\BatchRevokeSessions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RevokedSession> $revokedSessions
 * @property list<Shapes\BatchRevokeSessionError> $errors
 */
class BatchRevokeSessionsResponse extends Response
{
}
