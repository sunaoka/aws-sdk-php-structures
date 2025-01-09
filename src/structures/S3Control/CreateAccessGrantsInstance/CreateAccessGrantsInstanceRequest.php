<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrantsInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $IdentityCenterArn
 * @property list<Shapes\Tag> $Tags
 */
class CreateAccessGrantsInstanceRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     IdentityCenterArn?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
