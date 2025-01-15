<?php

namespace Sunaoka\Aws\Structures\WorkDocs\AddResourcePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $ResourceId
 * @property list<Shapes\SharePrincipal> $Principals
 * @property Shapes\NotificationOptions|null $NotificationOptions
 */
class AddResourcePermissionsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     ResourceId: string,
     *     Principals: list<Shapes\SharePrincipal>,
     *     NotificationOptions?: Shapes\NotificationOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
