<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSecurityGroupName
 * @property string $DBSecurityGroupDescription
 * @property list<Shapes\Tag> $Tags
 */
class CreateDBSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     DBSecurityGroupName: string,
     *     DBSecurityGroupDescription: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
