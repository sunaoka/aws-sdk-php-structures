<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParametersByPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Path
 * @property bool $Recursive
 * @property list<Shapes\ParameterStringFilter> $ParameterFilters
 * @property bool $WithDecryption
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetParametersByPathRequest extends Request
{
    /**
     * @param array{
     *     Path: string,
     *     Recursive?: bool,
     *     ParameterFilters?: list<Shapes\ParameterStringFilter>,
     *     WithDecryption?: bool,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
