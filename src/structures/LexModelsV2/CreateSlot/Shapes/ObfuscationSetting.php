<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'None'|'DefaultObfuscation' $obfuscationSettingType
 */
class ObfuscationSetting extends Shape
{
    /**
     * @param array{obfuscationSettingType: 'None'|'DefaultObfuscation'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
