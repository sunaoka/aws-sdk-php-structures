<?php

namespace Sunaoka\Aws\Structures\Rds\CreateOptionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptionGroupName
 * @property string $EngineName
 * @property string $MajorEngineVersion
 * @property string $OptionGroupDescription
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateOptionGroupRequest extends Request
{
    /**
     * @param array{
     *     OptionGroupName: string,
     *     EngineName: string,
     *     MajorEngineVersion: string,
     *     OptionGroupDescription: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
