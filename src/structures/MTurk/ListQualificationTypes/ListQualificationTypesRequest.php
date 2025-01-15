<?php

namespace Sunaoka\Aws\Structures\MTurk\ListQualificationTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Query
 * @property bool $MustBeRequestable
 * @property bool|null $MustBeOwnedByCaller
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListQualificationTypesRequest extends Request
{
    /**
     * @param array{
     *     Query?: string|null,
     *     MustBeRequestable: bool,
     *     MustBeOwnedByCaller?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
