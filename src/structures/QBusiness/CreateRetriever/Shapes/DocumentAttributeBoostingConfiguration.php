<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumberAttributeBoostingConfiguration $numberConfiguration
 * @property StringAttributeBoostingConfiguration $stringConfiguration
 * @property DateAttributeBoostingConfiguration $dateConfiguration
 * @property StringListAttributeBoostingConfiguration $stringListConfiguration
 */
class DocumentAttributeBoostingConfiguration extends Shape
{
    /**
     * @param array{
     *     numberConfiguration?: NumberAttributeBoostingConfiguration,
     *     stringConfiguration?: StringAttributeBoostingConfiguration,
     *     dateConfiguration?: DateAttributeBoostingConfiguration,
     *     stringListConfiguration?: StringListAttributeBoostingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
