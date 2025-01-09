<?php

namespace Sunaoka\Aws\Structures\Schemas\SearchSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Keywords
 * @property int $Limit
 * @property string $NextToken
 * @property string $RegistryName
 */
class SearchSchemasRequest extends Request
{
    /**
     * @param array{
     *     Keywords: string,
     *     Limit?: int,
     *     NextToken?: string,
     *     RegistryName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
