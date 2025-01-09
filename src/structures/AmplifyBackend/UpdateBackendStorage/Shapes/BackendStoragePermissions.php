<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendStorage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'READ'|'CREATE_AND_UPDATE'|'DELETE'> $Authenticated
 * @property list<'READ'|'CREATE_AND_UPDATE'|'DELETE'> $UnAuthenticated
 */
class BackendStoragePermissions extends Shape
{
    /**
     * @param array{
     *     Authenticated: list<'READ'|'CREATE_AND_UPDATE'|'DELETE'>,
     *     UnAuthenticated?: list<'READ'|'CREATE_AND_UPDATE'|'DELETE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
