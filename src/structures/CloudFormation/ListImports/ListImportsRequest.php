<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportName
 * @property string $NextToken
 */
class ListImportsRequest extends Request
{
    /**
     * @param array{
     *     ExportName: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
