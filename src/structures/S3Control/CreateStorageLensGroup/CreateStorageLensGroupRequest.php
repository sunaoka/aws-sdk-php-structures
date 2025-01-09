<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateStorageLensGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property Shapes\StorageLensGroup $StorageLensGroup
 * @property list<Shapes\Tag> $Tags
 */
class CreateStorageLensGroupRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     StorageLensGroup: Shapes\StorageLensGroup,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
