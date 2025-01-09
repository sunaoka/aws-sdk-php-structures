<?php

namespace Sunaoka\Aws\Structures\MTurk\ListQualificationTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Query
 * @property bool $MustBeRequestable
 * @property bool $MustBeOwnedByCaller
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListQualificationTypesRequest extends Request
{
    /**
     * @param array{
     *     Query?: string,
     *     MustBeRequestable: bool,
     *     MustBeOwnedByCaller?: bool,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
