<?php

namespace Sunaoka\Aws\Structures\Glue\ListIterableForms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssetIdentifier
 * @property string $IterableFormName
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListIterableFormsRequest extends Request
{
    /**
     * @param array{
     *     AssetIdentifier: string,
     *     IterableFormName: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
