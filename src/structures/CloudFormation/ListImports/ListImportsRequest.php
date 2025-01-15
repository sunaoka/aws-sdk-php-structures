<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportName
 * @property string|null $NextToken
 */
class ListImportsRequest extends Request
{
    /**
     * @param array{
     *     ExportName: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
