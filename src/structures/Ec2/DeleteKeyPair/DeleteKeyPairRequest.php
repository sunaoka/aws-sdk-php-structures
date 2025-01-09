<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyName
 * @property string $KeyPairId
 * @property bool $DryRun
 */
class DeleteKeyPairRequest extends Request
{
    /**
     * @param array{
     *     KeyName?: string,
     *     KeyPairId?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
