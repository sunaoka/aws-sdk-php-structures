<?php

namespace Sunaoka\Aws\Structures\QBusiness\CheckDocumentAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AND'|'OR'|null $memberRelation
 * @property list<DocumentAclUser>|null $users
 * @property list<DocumentAclGroup>|null $groups
 */
class DocumentAclCondition extends Shape
{
    /**
     * @param array{
     *     memberRelation?: 'AND'|'OR'|null,
     *     users?: list<DocumentAclUser>|null,
     *     groups?: list<DocumentAclGroup>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
