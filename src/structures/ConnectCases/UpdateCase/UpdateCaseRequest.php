<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $domainId
 * @property list<Shapes\FieldValue> $fields
 * @property Shapes\UserUnion|null $performedBy
 */
class UpdateCaseRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     domainId: string,
     *     fields: list<Shapes\FieldValue>,
     *     performedBy?: Shapes\UserUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
