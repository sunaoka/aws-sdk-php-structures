<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkAclEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property bool $Egress
 * @property string $NetworkAclId
 * @property int $RuleNumber
 */
class DeleteNetworkAclEntryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Egress: bool,
     *     NetworkAclId: string,
     *     RuleNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
