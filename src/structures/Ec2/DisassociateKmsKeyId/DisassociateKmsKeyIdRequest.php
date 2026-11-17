<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateKmsKeyId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SnapshotId
 * @property string $KmsKeyId
 * @property bool|null $DryRun
 */
class DisassociateKmsKeyIdRequest extends Request
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
