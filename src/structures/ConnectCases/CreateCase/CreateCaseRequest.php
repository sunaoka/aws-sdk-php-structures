<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $templateId
 * @property list<Shapes\FieldValue> $fields
 * @property string|null $clientToken
 * @property Shapes\UserUnion|null $performedBy
 */
class CreateCaseRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     templateId: string,
     *     fields: list<Shapes\FieldValue>,
     *     clientToken?: string|null,
     *     performedBy?: Shapes\UserUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
