<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkAclEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $NetworkAclId
 * @property int $RuleNumber
 * @property bool $Egress
 */
class DeleteNetworkAclEntryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     NetworkAclId: string,
     *     RuleNumber: int,
     *     Egress: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
