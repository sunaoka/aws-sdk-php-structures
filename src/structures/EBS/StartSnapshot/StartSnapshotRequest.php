<?php

namespace Sunaoka\Aws\Structures\EBS\StartSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $VolumeSize
 * @property string $ParentSnapshotId
 * @property list<Shapes\Tag> $Tags
 * @property string $Description
 * @property string $ClientToken
 * @property bool $Encrypted
 * @property string $KmsKeyArn
 * @property int $Timeout
 */
class StartSnapshotRequest extends Request
{
    /**
     * @param array{
     *     VolumeSize: int,
     *     ParentSnapshotId?: string,
     *     Tags?: list<Shapes\Tag>,
     *     Description?: string,
     *     ClientToken?: string,
     *     Encrypted?: bool,
     *     KmsKeyArn?: string,
     *     Timeout?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
