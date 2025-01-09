<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntegerConfigurationOptions $Integer
 * @property IntegerListConfigurationOptions $IntegerList
 * @property DoubleConfigurationOptions $Double
 * @property StringConfigurationOptions $String
 * @property StringListConfigurationOptions $StringList
 * @property BooleanConfigurationOptions $Boolean
 * @property EnumConfigurationOptions $Enum
 * @property EnumListConfigurationOptions $EnumList
 */
class ConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     Integer?: IntegerConfigurationOptions,
     *     IntegerList?: IntegerListConfigurationOptions,
     *     Double?: DoubleConfigurationOptions,
     *     String?: StringConfigurationOptions,
     *     StringList?: StringListConfigurationOptions,
     *     Boolean?: BooleanConfigurationOptions,
     *     Enum?: EnumConfigurationOptions,
     *     EnumList?: EnumListConfigurationOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
