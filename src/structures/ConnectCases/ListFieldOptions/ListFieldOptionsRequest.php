<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListFieldOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $fieldId
 * @property int $maxResults
 * @property string $nextToken
 * @property list<string> $values
 */
class ListFieldOptionsRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     fieldId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
