<?php

namespace Sunaoka\Aws\Structures\EBS\StartSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $VolumeSize
 * @property string|null $ParentSnapshotId
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $Description
 * @property string|null $ClientToken
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyArn
 * @property int<10, 4320>|null $Timeout
 */
class StartSnapshotRequest extends Request
{
    /**
     * @param array{
     *     VolumeSize: int<1, max>,
     *     ParentSnapshotId?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Description?: string|null,
     *     ClientToken?: string|null,
     *     Encrypted?: bool|null,
     *     KmsKeyArn?: string|null,
     *     Timeout?: int<10, 4320>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
