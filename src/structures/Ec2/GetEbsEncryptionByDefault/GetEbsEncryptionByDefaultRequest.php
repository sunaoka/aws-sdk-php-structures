<?php

namespace Sunaoka\Aws\Structures\Ec2\GetEbsEncryptionByDefault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 */
class GetEbsEncryptionByDefaultRequest extends Request
{
    /**
     * @param array{DryRun?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
