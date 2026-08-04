<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateApplicationStatusCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationStatusCheckId
 * @property list<Shapes\CustomTagKeyValueRequestPair>|null $TargetTagAssociations
 * @property list<string>|null $InstanceIds
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class DisassociateApplicationStatusCheckRequest extends Request
{
    /**
     * @param array{
     *     ApplicationStatusCheckId: string,
     *     TargetTagAssociations?: list<Shapes\CustomTagKeyValueRequestPair>|null,
     *     InstanceIds?: list<string>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
