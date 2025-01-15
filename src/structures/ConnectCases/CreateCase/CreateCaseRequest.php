<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainId
 * @property list<Shapes\FieldValue> $fields
 * @property Shapes\UserUnion|null $performedBy
 * @property string $templateId
 */
class CreateCaseRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainId: string,
     *     fields: list<Shapes\FieldValue>,
     *     performedBy?: Shapes\UserUnion|null,
     *     templateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
