<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumberAttributeBoostingConfiguration|null $numberConfiguration
 * @property StringAttributeBoostingConfiguration|null $stringConfiguration
 * @property DateAttributeBoostingConfiguration|null $dateConfiguration
 * @property StringListAttributeBoostingConfiguration|null $stringListConfiguration
 */
class DocumentAttributeBoostingConfiguration extends Shape
{
    /**
     * @param array{
     *     numberConfiguration?: NumberAttributeBoostingConfiguration|null,
     *     stringConfiguration?: StringAttributeBoostingConfiguration|null,
     *     dateConfiguration?: DateAttributeBoostingConfiguration|null,
     *     stringListConfiguration?: StringListAttributeBoostingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
