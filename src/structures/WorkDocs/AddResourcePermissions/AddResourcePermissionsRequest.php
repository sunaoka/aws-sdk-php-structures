<?php

namespace Sunaoka\Aws\Structures\WorkDocs\AddResourcePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $ResourceId
 * @property list<Shapes\SharePrincipal> $Principals
 * @property Shapes\NotificationOptions $NotificationOptions
 */
class AddResourcePermissionsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     ResourceId: string,
     *     Principals: list<Shapes\SharePrincipal>,
     *     NotificationOptions?: Shapes\NotificationOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
