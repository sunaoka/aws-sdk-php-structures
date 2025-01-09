<?php

namespace Sunaoka\Aws\Structures\kendra\Retrieve;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $QueryText
 * @property Shapes\AttributeFilter $AttributeFilter
 * @property list<string> $RequestedDocumentAttributes
 * @property list<Shapes\DocumentRelevanceConfiguration> $DocumentRelevanceOverrideConfigurations
 * @property int $PageNumber
 * @property int $PageSize
 * @property Shapes\UserContext $UserContext
 */
class RetrieveRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     QueryText: string,
     *     AttributeFilter?: Shapes\AttributeFilter,
     *     RequestedDocumentAttributes?: list<string>,
     *     DocumentRelevanceOverrideConfigurations?: list<Shapes\DocumentRelevanceConfiguration>,
     *     PageNumber?: int,
     *     PageSize?: int,
     *     UserContext?: Shapes\UserContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
