<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $KeyName
 * @property string|null $KeyPairId
 * @property bool|null $DryRun
 */
class DeleteKeyPairRequest extends Request
{
    /**
     * @param array{
     *     KeyName?: string|null,
     *     KeyPairId?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
