<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreAddressToClassic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $PublicIp
 */
class RestoreAddressToClassicRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     PublicIp: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
