<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateKmsKeyId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SnapshotId
 * @property string $KmsKeyId
 * @property bool|null $DryRun
 */
class AssociateKmsKeyIdRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId?: string|null,
     *     KmsKeyId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
