<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $caseId
 * @property list<Shapes\FieldValue> $fields
 * @property Shapes\UserUnion|null $performedBy
 */
class UpdateCaseRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     caseId: string,
     *     fields: list<Shapes\FieldValue>,
     *     performedBy?: Shapes\UserUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
