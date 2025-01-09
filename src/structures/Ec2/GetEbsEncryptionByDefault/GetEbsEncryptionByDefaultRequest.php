<?php

namespace Sunaoka\Aws\Structures\Ec2\GetEbsEncryptionByDefault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 */
class GetEbsEncryptionByDefaultRequest extends Request
{
    /**
     * @param array{DryRun?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
