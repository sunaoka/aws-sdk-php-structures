<?php

namespace Sunaoka\Aws\Structures\EBS;

class EBSClient extends \Aws\EBS\EBSClient
{
    use CompleteSnapshot\CompleteSnapshotTrait;
    use GetSnapshotBlock\GetSnapshotBlockTrait;
    use ListChangedBlocks\ListChangedBlocksTrait;
    use ListSnapshotBlocks\ListSnapshotBlocksTrait;
    use PutSnapshotBlock\PutSnapshotBlockTrait;
    use StartSnapshot\StartSnapshotTrait;
}
