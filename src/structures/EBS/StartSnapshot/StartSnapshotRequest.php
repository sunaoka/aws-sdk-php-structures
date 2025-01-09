<?php

namespace Sunaoka\Aws\Structures\EBS\StartSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $VolumeSize
 * @property string $ParentSnapshotId
 * @property list<Shapes\Tag> $Tags
 * @property string $Description
 * @property string $ClientToken
 * @property bool $Encrypted
 * @property string $KmsKeyArn
 * @property int<10, 4320> $Timeout
 */
class StartSnapshotRequest extends Request
{
    /**
     * @param array{
     *     VolumeSize: int<1, max>,
     *     ParentSnapshotId?: string,
     *     Tags?: list<Shapes\Tag>,
     *     Description?: string,
     *     ClientToken?: string,
     *     Encrypted?: bool,
     *     KmsKeyArn?: string,
     *     Timeout?: int<10, 4320>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
