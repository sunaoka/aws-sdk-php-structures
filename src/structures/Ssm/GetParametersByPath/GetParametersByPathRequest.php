<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParametersByPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Path
 * @property bool|null $Recursive
 * @property list<Shapes\ParameterStringFilter>|null $ParameterFilters
 * @property bool|null $WithDecryption
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 */
class GetParametersByPathRequest extends Request
{
    /**
     * @param array{
     *     Path: string,
     *     Recursive?: bool|null,
     *     ParameterFilters?: list<Shapes\ParameterStringFilter>|null,
     *     WithDecryption?: bool|null,
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
