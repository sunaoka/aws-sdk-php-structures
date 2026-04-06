<?php

namespace Sunaoka\Aws\Structures\QBusiness\CheckDocumentAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AND'|'OR'|null $memberRelation
 * @property list<DocumentAclCondition>|null $conditions
 */
class DocumentAclMembership extends Shape
{
    /**
     * @param array{
     *     memberRelation?: 'AND'|'OR'|null,
     *     conditions?: list<DocumentAclCondition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
