<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutDomainObjectType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Source
 * @property string $Target
 * @property 'STRING'|'NUMBER'|null $ContentType
 * @property 'TEXTUAL'|'CATEGORICAL'|null $FeatureType
 */
class DomainObjectTypeField extends Shape
{
    /**
     * @param array{
     *     Source: string,
     *     Target: string,
     *     ContentType?: 'STRING'|'NUMBER'|null,
     *     FeatureType?: 'TEXTUAL'|'CATEGORICAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
