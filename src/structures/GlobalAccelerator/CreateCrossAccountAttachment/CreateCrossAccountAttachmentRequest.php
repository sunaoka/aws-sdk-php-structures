<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCrossAccountAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<string>|null $Principals
 * @property list<Shapes\ResourceShape>|null $Resources
 * @property string $IdempotencyToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateCrossAccountAttachmentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Principals?: list<string>|null,
     *     Resources?: list<Shapes\ResourceShape>|null,
     *     IdempotencyToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
