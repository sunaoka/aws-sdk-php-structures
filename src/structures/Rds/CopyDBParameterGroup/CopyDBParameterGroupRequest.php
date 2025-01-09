<?php

namespace Sunaoka\Aws\Structures\Rds\CopyDBParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBParameterGroupIdentifier
 * @property string $TargetDBParameterGroupIdentifier
 * @property string $TargetDBParameterGroupDescription
 * @property list<Shapes\Tag> $Tags
 */
class CopyDBParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     SourceDBParameterGroupIdentifier: string,
     *     TargetDBParameterGroupIdentifier: string,
     *     TargetDBParameterGroupDescription: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
