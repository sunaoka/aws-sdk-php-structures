<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyOptionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptionGroupName
 * @property list<Shapes\OptionConfiguration>|null $OptionsToInclude
 * @property list<string>|null $OptionsToRemove
 * @property bool|null $ApplyImmediately
 */
class ModifyOptionGroupRequest extends Request
{
    /**
     * @param array{
     *     OptionGroupName: string,
     *     OptionsToInclude?: list<Shapes\OptionConfiguration>|null,
     *     OptionsToRemove?: list<string>|null,
     *     ApplyImmediately?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
