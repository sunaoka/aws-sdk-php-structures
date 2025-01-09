<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateCrossAccountAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentArn
 * @property string $Name
 * @property list<string> $AddPrincipals
 * @property list<string> $RemovePrincipals
 * @property list<Shapes\Resource> $AddResources
 * @property list<Shapes\Resource> $RemoveResources
 */
class UpdateCrossAccountAttachmentRequest extends Request
{
    /**
     * @param array{
     *     AttachmentArn: string,
     *     Name?: string,
     *     AddPrincipals?: list<string>,
     *     RemovePrincipals?: list<string>,
     *     AddResources?: list<Shapes\Resource>,
     *     RemoveResources?: list<Shapes\Resource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
