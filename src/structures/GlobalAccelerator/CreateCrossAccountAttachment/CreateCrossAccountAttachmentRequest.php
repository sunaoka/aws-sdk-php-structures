<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCrossAccountAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<string> $Principals
 * @property list<Shapes\Resource> $Resources
 * @property string $IdempotencyToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateCrossAccountAttachmentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Principals?: list<string>,
     *     Resources?: list<Shapes\Resource>,
     *     IdempotencyToken: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
