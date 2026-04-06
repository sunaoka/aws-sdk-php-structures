<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntegerConfigurationOptions|null $Integer
 * @property IntegerListConfigurationOptions|null $IntegerList
 * @property DoubleConfigurationOptions|null $Double
 * @property StringConfigurationOptions|null $String
 * @property StringListConfigurationOptions|null $StringList
 * @property BooleanConfigurationOptions|null $Boolean
 * @property EnumConfigurationOptions|null $Enum
 * @property EnumListConfigurationOptions|null $EnumList
 */
class ConfigurationOptions extends Shape
{
    /**
     * @param array{
     *     Integer?: IntegerConfigurationOptions|null,
     *     IntegerList?: IntegerListConfigurationOptions|null,
     *     Double?: DoubleConfigurationOptions|null,
     *     String?: StringConfigurationOptions|null,
     *     StringList?: StringListConfigurationOptions|null,
     *     Boolean?: BooleanConfigurationOptions|null,
     *     Enum?: EnumConfigurationOptions|null,
     *     EnumList?: EnumListConfigurationOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
