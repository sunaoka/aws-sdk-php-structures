<?php

namespace Sunaoka\Aws\Structures\Pinpoint\RemoveAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $AttributeType
 * @property list<string> $Attributes
 */
class AttributesResource extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     AttributeType: string,
     *     Attributes?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
