<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControlMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ControlArn
 * @property 'COMPLEMENTARY'|'ALTERNATIVE'|'MUTUALLY_EXCLUSIVE' $RelationType
 */
class RelatedControlMappingDetails extends Shape
{
    /**
     * @param array{
     *     ControlArn?: string|null,
     *     RelationType: 'COMPLEMENTARY'|'ALTERNATIVE'|'MUTUALLY_EXCLUSIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
