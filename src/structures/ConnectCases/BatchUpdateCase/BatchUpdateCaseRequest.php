<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchUpdateCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property list<Shapes\BatchUpdateCaseIdentifier> $cases
 * @property list<Shapes\FieldValueInput> $fields
 * @property Shapes\UserUnion|null $performedBy
 * @property string|null $title
 * @property string|null $status
 * @property string|null $customerId
 * @property string|null $clientToken
 */
class BatchUpdateCaseRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     cases: list<Shapes\BatchUpdateCaseIdentifier>,
     *     fields: list<Shapes\FieldValueInput>,
     *     performedBy?: Shapes\UserUnion|null,
     *     title?: string|null,
     *     status?: string|null,
     *     customerId?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
