<?php

namespace Sunaoka\Aws\Structures\ConnectCases\StartMergeCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $caseId
 * @property list<string> $secondaryCaseIds
 * @property list<Shapes\FieldsConfiguration>|null $fieldsConfiguration
 * @property Shapes\RelatedItemsConfiguration|null $relatedItemsConfiguration
 * @property Shapes\UserUnion|null $performedBy
 */
class StartMergeCasesRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     caseId: string,
     *     secondaryCaseIds: list<string>,
     *     fieldsConfiguration?: list<Shapes\FieldsConfiguration>|null,
     *     relatedItemsConfiguration?: Shapes\RelatedItemsConfiguration|null,
     *     performedBy?: Shapes\UserUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
