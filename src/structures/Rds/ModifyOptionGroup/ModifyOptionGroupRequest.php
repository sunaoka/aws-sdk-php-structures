<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyOptionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptionGroupName
 * @property list<Shapes\OptionConfiguration> $OptionsToInclude
 * @property list<string> $OptionsToRemove
 * @property bool $ApplyImmediately
 */
class ModifyOptionGroupRequest extends Request
{
    /**
     * @param array{
     *     OptionGroupName: string,
     *     OptionsToInclude?: list<Shapes\OptionConfiguration>,
     *     OptionsToRemove?: list<string>,
     *     ApplyImmediately?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
