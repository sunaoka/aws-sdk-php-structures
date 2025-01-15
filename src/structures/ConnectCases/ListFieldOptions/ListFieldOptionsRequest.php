<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListFieldOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $fieldId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<string>|null $values
 */
class ListFieldOptionsRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     fieldId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
