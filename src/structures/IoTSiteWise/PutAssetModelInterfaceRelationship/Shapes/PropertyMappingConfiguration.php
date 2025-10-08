<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutAssetModelInterfaceRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $matchByPropertyName
 * @property bool|null $createMissingProperty
 * @property list<PropertyMapping>|null $overrides
 */
class PropertyMappingConfiguration extends Shape
{
    /**
     * @param array{
     *     matchByPropertyName?: bool|null,
     *     createMissingProperty?: bool|null,
     *     overrides?: list<PropertyMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
