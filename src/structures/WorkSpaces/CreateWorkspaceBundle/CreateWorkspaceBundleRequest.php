<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaceBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BundleName
 * @property string $BundleDescription
 * @property string $ImageId
 * @property Shapes\ComputeType $ComputeType
 * @property Shapes\UserStorage $UserStorage
 * @property Shapes\RootStorage $RootStorage
 * @property list<Shapes\Tag> $Tags
 */
class CreateWorkspaceBundleRequest extends Request
{
    /**
     * @param array{
     *     BundleName: string,
     *     BundleDescription: string,
     *     ImageId: string,
     *     ComputeType: Shapes\ComputeType,
     *     UserStorage: Shapes\UserStorage,
     *     RootStorage?: Shapes\RootStorage,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
