<?php

namespace Sunaoka\Aws\Structures\QConnect\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $assistantAssociationIds
 */
class KnowledgeSource extends Shape
{
    /**
     * @param array{assistantAssociationIds?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
