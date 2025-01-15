<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterName
 * @property string|null $Description
 * @property string|null $Source
 * @property string|null $DataType
 * @property string|null $AllowedValues
 * @property bool|null $IsModifiable
 * @property string|null $MinimumEngineVersion
 * @property list<CacheNodeTypeSpecificValue>|null $CacheNodeTypeSpecificValues
 * @property 'immediate'|'requires-reboot'|null $ChangeType
 */
class CacheNodeTypeSpecificParameter extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string|null,
     *     Description?: string|null,
     *     Source?: string|null,
     *     DataType?: string|null,
     *     AllowedValues?: string|null,
     *     IsModifiable?: bool|null,
     *     MinimumEngineVersion?: string|null,
     *     CacheNodeTypeSpecificValues?: list<CacheNodeTypeSpecificValue>|null,
     *     ChangeType?: 'immediate'|'requires-reboot'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
