<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyEbsDefaultKmsKeyId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KmsKeyId
 * @property bool|null $DryRun
 */
class ModifyEbsDefaultKmsKeyIdRequest extends Request
{
    /**
     * @param array{
     *     KmsKeyId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
