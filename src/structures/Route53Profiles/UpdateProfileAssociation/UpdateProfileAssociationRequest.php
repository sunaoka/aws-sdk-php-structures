<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\UpdateProfileAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileAssociationId
 * @property string|null $Name
 * @property int<100, 9900>|null $Priority
 */
class UpdateProfileAssociationRequest extends Request
{
    /**
     * @param array{
     *     ProfileAssociationId: string,
     *     Name?: string|null,
     *     Priority?: int<100, 9900>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
