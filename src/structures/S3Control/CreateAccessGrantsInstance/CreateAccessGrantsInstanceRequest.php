<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrantsInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $IdentityCenterArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAccessGrantsInstanceRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     IdentityCenterArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
