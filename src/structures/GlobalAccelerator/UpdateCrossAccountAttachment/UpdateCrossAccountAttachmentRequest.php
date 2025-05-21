<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateCrossAccountAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentArn
 * @property string|null $Name
 * @property list<string>|null $AddPrincipals
 * @property list<string>|null $RemovePrincipals
 * @property list<Shapes\ResourceShape>|null $AddResources
 * @property list<Shapes\ResourceShape>|null $RemoveResources
 */
class UpdateCrossAccountAttachmentRequest extends Request
{
    /**
     * @param array{
     *     AttachmentArn: string,
     *     Name?: string|null,
     *     AddPrincipals?: list<string>|null,
     *     RemovePrincipals?: list<string>|null,
     *     AddResources?: list<Shapes\ResourceShape>|null,
     *     RemoveResources?: list<Shapes\ResourceShape>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
