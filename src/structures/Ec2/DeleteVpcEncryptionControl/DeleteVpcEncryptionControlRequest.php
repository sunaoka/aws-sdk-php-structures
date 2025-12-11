<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcEncryptionControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $VpcEncryptionControlId
 */
class DeleteVpcEncryptionControlRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VpcEncryptionControlId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
