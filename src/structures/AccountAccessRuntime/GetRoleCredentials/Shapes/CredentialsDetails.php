<?php

namespace Sunaoka\Aws\Structures\AccountAccessRuntime\GetRoleCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProgrammaticAccessDetails|null $programmaticAccess
 */
class CredentialsDetails extends Shape
{
    /**
     * @param array{programmaticAccess?: ProgrammaticAccessDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
