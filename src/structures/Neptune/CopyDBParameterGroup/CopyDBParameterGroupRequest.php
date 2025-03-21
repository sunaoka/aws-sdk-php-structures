<?php

namespace Sunaoka\Aws\Structures\Neptune\CopyDBParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBParameterGroupIdentifier
 * @property string $TargetDBParameterGroupIdentifier
 * @property string $TargetDBParameterGroupDescription
 * @property list<Shapes\Tag>|null $Tags
 */
class CopyDBParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     SourceDBParameterGroupIdentifier: string,
     *     TargetDBParameterGroupIdentifier: string,
     *     TargetDBParameterGroupDescription: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
