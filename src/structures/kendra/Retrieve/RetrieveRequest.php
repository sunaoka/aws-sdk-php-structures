<?php

namespace Sunaoka\Aws\Structures\kendra\Retrieve;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $QueryText
 * @property Shapes\AttributeFilter|null $AttributeFilter
 * @property list<string>|null $RequestedDocumentAttributes
 * @property list<Shapes\DocumentRelevanceConfiguration>|null $DocumentRelevanceOverrideConfigurations
 * @property int|null $PageNumber
 * @property int|null $PageSize
 * @property Shapes\UserContext|null $UserContext
 */
class RetrieveRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     QueryText: string,
     *     AttributeFilter?: Shapes\AttributeFilter|null,
     *     RequestedDocumentAttributes?: list<string>|null,
     *     DocumentRelevanceOverrideConfigurations?: list<Shapes\DocumentRelevanceConfiguration>|null,
     *     PageNumber?: int|null,
     *     PageSize?: int|null,
     *     UserContext?: Shapes\UserContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
