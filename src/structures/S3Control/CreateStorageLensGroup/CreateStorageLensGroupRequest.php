<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateStorageLensGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property Shapes\StorageLensGroup $StorageLensGroup
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateStorageLensGroupRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     StorageLensGroup: Shapes\StorageLensGroup,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
